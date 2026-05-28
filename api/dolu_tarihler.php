<?php
// api/dolu_tarihler.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once __DIR__ . '/db.php';

// Bugünden itibaren 12 ay içindeki dolu tarih+saatleri getir
$stmt = $pdo->prepare("
    SELECT tarih, saat
    FROM randevular
    WHERE tarih >= CURDATE()
      AND tarih <= DATE_ADD(CURDATE(), INTERVAL 12 MONTH)
      AND durum != 'iptal'
    ORDER BY tarih, saat
");
$stmt->execute();
$rows = $stmt->fetchAll();

// { "2024-06-15": ["09:00","10:30"], ... } formatında döndür
$result = [];
foreach ($rows as $row) {
    $result[$row['tarih']][] = $row['saat'];
}

echo json_encode(['success' => true, 'dolu' => $result]);
