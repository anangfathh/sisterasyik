<?php
require 'koneksi.php';

function tambahMatkul($conn, $kode_mk, $nama, $sks)
{
    $sql = "INSERT INTO matkul (kode_mk, nama, sks) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$kode_mk, $nama, $sks]);
    echo "
            <script>
                alert('Data Matkul Berhasil di Tambahkan!!');
                document.location.href = 'index_mk.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_mk = $_POST["kode_mk"];
    $nama = $_POST["nama"];
    $sks = $_POST["sks"];
    // $tanggal_lahir = $_POST["tanggal_lahir"];

    tambahMatkul($conn, $kode_mk, $nama, $sks);
}

$conn = null;
