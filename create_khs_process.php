<?php
require 'koneksi.php';

function tambahKHS($conn, $nim, $kode_mk, $nilai)
{
    $sql = "INSERT INTO perkuliahan (nim, kode_mk, nilai) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nim, $kode_mk, $nilai]);
    echo "
            <script>
                alert('Data khs Berhasil di Tambahkan!!');
                document.location.href = 'index_perkuliahan.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $kode_mk = $_POST["kode_mk"];
    $nilai = $_POST["nilai"];
    // $tanggal_lahir = $_POST["tanggal_lahir"];

    tambahKHS($conn, $nim, $kode_mk, $nilai);
}

$conn = null;
