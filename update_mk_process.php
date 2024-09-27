<?php
require 'koneksi.php';

function updateMatkul($conn, $kode, $nama, $sks)
{
    $sql = "UPDATE matkul SET nama=?, sks=? WHERE kode_mk=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nama, $sks, $kode]);
    echo "
            <script>
                alert('Data Mata Kuliah Berhasil di Update!!');
                document.location.href = 'index_mk.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $sks = $_POST["sks"];

    updateMatkul($conn, $kode, $nama, $sks);
}

$conn = null;
