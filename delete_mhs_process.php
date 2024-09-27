<?php
require 'koneksi.php';

function hapusMahasiswa($conn, $nim)
{
    $sql = "DELETE FROM mahasiswa WHERE nim=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nim]);
    echo "
            <script>
                alert('Data Berhasil Dihapus!!');
                document.location.href = 'index_mhs.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    hapusMahasiswa($conn, $nim);
}

$conn = null;
