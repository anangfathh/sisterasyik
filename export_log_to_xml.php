<?php
require 'koneksi.php';

// Fungsi untuk mengekspor data dari tabel access_log ke XML
function exportToXML($conn) {
    // Query untuk mengambil semua data dari tabel access_log
    $sql = "SELECT id, ip_address, log_time, method, url, status_code, response_size, user_agent FROM access_log";
    $result = $conn->query($sql);

    // Membuat objek SimpleXMLElement
    $xml = new SimpleXMLElement('<xml/>');

    $logs = $xml->addChild('logs');

    // Memeriksa apakah ada data
    if ($result->rowCount() > 0) {
        // Loop melalui semua hasil query
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          // Tambahkan setiap entri sebagai child dari root <logs>
          $log = $xml->addChild('log');
          $log->addChild('id', htmlspecialchars($row['id']));
          $log->addChild('ip_address', htmlspecialchars($row['ip_address']));
          $log->addChild('log_time', htmlspecialchars($row['log_time']));
          $log->addChild('method', htmlspecialchars($row['method']));
          $log->addChild('url', htmlspecialchars($row['url']));  // Escape entitas XML dalam URL
          $log->addChild('status_code', htmlspecialchars($row['status_code']));
          $log->addChild('response_size', htmlspecialchars($row['response_size']));
          $log->addChild('user_agent', htmlspecialchars($row['user_agent']));  // Escape entitas XML dalam user agent
      }

        // Set header untuk download file XML
        header('Content-Disposition: attachment; filename="logs.xml"');
        header('Content-Type: text/xml');

        // Cetak XML ke browser (untuk download)
        echo $xml->asXML();
    } else {
        echo "Tidak ada data log untuk diekspor.";
    }
}

// Memanggil fungsi untuk ekspor ke XML
exportToXML($conn);

// Tutup koneksi
$conn = null;
?>