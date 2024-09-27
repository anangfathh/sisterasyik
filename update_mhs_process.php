<?php
require 'koneksi.php';

function updateMahasiswa($conn, $nim, $nama, $alamat, $tanggal_lahir)
{
    $sql = "UPDATE mahasiswa SET nama=?, alamat=?, tanggal_lahir=? WHERE nim=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nama, $alamat, $tanggal_lahir, $nim]);
    echo "
            <script>
                alert('Data Mahasiswa Berhasil di Update!!');
                document.location.href = 'index_mhs.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $tanggal_lahir = $_POST["tanggal_lahir"];

    updateMahasiswa($conn, $nim, $nama, $alamat, $tanggal_lahir);
}

$conn = null;
