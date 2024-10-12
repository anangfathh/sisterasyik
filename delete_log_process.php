<?php
require 'koneksi.php';

function hapusLog($conn, $id)
{
    $sql = "DELETE FROM access_log WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    echo "
            <script>
                alert('Data Berhasil Dihapus!!');
                document.location.href = 'index.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    hapusLog($conn, $id);
}

$conn = null;
