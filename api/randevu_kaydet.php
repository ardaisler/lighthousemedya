<?php
// api/randevu_kaydet.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Sadece POST kabul edilir.']);
    exit;
}

require_once __DIR__ . '/db.php';

$data = json_decode(file_get_contents('php://input'), true);

// Zorunlu alanları kontrol et
$required = ['hizmet','tarih','saat','ad','soyad','telefon','eposta'];
foreach ($required as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => "$field alanı boş olamaz."]);
        exit;
    }
}

// O tarih+saat dolu mu kontrol et
$check = $pdo->prepare("SELECT id FROM randevular WHERE tarih = ? AND saat = ? AND durum != 'iptal'");
$check->execute([$data['tarih'], $data['saat']]);
if ($check->fetch()) {
    echo json_encode(['success' => false, 'error' => 'Bu tarih ve saat dolu. Lütfen başka bir saat seçin.']);
    exit;
}

// Aynı kişi daha önce randevu almış mı? (ad+soyad+telefon+eposta)
$dupCheck = $pdo->prepare("
    SELECT id FROM randevular
    WHERE ad = ? AND soyad = ? AND telefon = ? AND eposta = ?
    AND durum != 'iptal'
    LIMIT 1
");
$dupCheck->execute([
    htmlspecialchars($data['ad']),
    htmlspecialchars($data['soyad']),
    htmlspecialchars($data['telefon']),
    filter_var($data['eposta'], FILTER_SANITIZE_EMAIL),
]);
$mevcutRandevu = $dupCheck->fetch();
if ($mevcutRandevu) {
    echo json_encode([
        'success' => false,
        'error'   => 'Bu bilgilerle daha önce bir randevu alınmış. Randevunuz varsa iptal için bizimle iletişime geçebilirsiniz.'
    ]);
    exit;
}

// Kaydet
$stmt = $pdo->prepare("
    INSERT INTO randevular (hizmet, tarih, saat, ad, soyad, telefon, eposta, not_field)
    VALUES (:hizmet, :tarih, :saat, :ad, :soyad, :telefon, :eposta, :not_field)
");

$stmt->execute([
    ':hizmet'    => htmlspecialchars($data['hizmet']),
    ':tarih'     => $data['tarih'],
    ':saat'      => $data['saat'],
    ':ad'        => htmlspecialchars($data['ad']),
    ':soyad'     => htmlspecialchars($data['soyad']),
    ':telefon'   => htmlspecialchars($data['telefon']),
    ':eposta'    => filter_var($data['eposta'], FILTER_SANITIZE_EMAIL),
    ':not_field' => htmlspecialchars($data['not_field'] ?? ''),
]);

echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]);
