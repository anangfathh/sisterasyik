<?php
require 'koneksi.php';

function tambahLOG($conn, $ip, $log_time, $method, $url, $status_code, $response_size, $user_agent)
{
    $sql = "INSERT INTO access_log (ip_address, log_time, method, url, status_code, response_size, user_agent) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ip, $log_time, $method, $url, $status_code, $response_size, $user_agent]);
    echo "
            <script>
                alert('Data LOG Berhasil di Tambahkan!!');
                document.location.href = 'index.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $log_lines = $_POST["log"];
    
    // Split log input by new line
    $log_array = explode("\n", $log_lines);
    
    // Loop through each log line and process it
    foreach ($log_array as $log_line) {
        // Remove extra white spaces
        $log_line = trim($log_line);
        
        // If log line is not empty, process it
        if (!empty($log_line)) {
            // Parsing log menggunakan regex
            preg_match('/(.*?) - - \[(.*?)\] "(.*?) (.*?) HTTP\/.*?" (\d+) (\d+) ".*?" "(.*?)"/', $log_line, $matches);
            
            if ($matches) {
                $ip = $matches[1];
                $log_time = date('Y-m-d H:i:s', strtotime($matches[2]));
                $method = $matches[3];
                $url = $matches[4];
                $status_code = $matches[5];
                $response_size = $matches[6];
                $user_agent = $matches[7];

                // Insert log ke database
                tambahLOG($conn, $ip, $log_time, $method, $url, $status_code, $response_size, $user_agent);
            }
        }
    }
}

$conn = null;
