<?php
require 'koneksi.php';

function updateMahasiswa($conn, $nim, $nama, $alamat)
{
    $sql = "UPDATE mahasiswa SET nama=?, alamat=? WHERE nim=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nama, $alamat, $nim]);
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

    updateMahasiswa($conn, $nim, $nama, $alamat);
}

$conn = null;
