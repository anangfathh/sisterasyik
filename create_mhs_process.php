<?php
require 'koneksi.php';

function tambahMahasiswa($conn, $nim, $nama, $alamat)
{
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nim, $nama, $alamat]);
    echo "
            <script>
                alert('Data Mahasiswa Berhasil di Tambahkan!!');
                document.location.href = 'index_mhs.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    // $tanggal_lahir = $_POST["tanggal_lahir"];

    tambahMahasiswa($conn, $nim, $nama, $alamat);
}

$conn = null;
