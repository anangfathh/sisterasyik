<?php
require 'koneksi.php';

function hapusMatkul($conn, $kode)
{
    $sql = "DELETE FROM matkul WHERE kode_mk=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$kode]);
    echo "
            <script>
                alert('Data Berhasil Dihapus!!');
                document.location.href = 'index_mk.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["kode"];
    hapusMatkul($conn, $kode);
}

$conn = null;
