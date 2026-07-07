<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

require_once __DIR__.'/db.php';

$hizmet = $_GET['hizmet'] ?? '';

$hizmet = html_entity_decode($hizmet, ENT_QUOTES | ENT_HTML5, 'UTF-8');

$stmt = $pdo->prepare("
    SELECT tarih, saat
    FROM randevular
    WHERE (
        hizmet = ?
        OR hizmet = ?
    )
    AND tarih >= CURDATE()
    AND tarih <= DATE_ADD(CURDATE(), INTERVAL 12 MONTH)
    AND durum != 'iptal'
    ORDER BY tarih, saat
");

$stmt->execute([
    $hizmet,
    htmlspecialchars($hizmet, ENT_QUOTES | ENT_HTML5, 'UTF-8')
]);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$result = [];

foreach($rows as $row){
    $result[$row['tarih']][] = $row['saat'];
}

echo json_encode([
    'success' => true,
    'hizmet' => $hizmet,
    'dolu' => $result
], JSON_UNESCAPED_UNICODE);