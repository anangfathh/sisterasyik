<?php
require 'koneksi.php';

function tambahDosen($conn, $nip, $nama, $no_wa)
{
    $sql = "INSERT INTO dosen (nip, nama, no_wa) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nip, $nama, $no_wa]);
    echo "
            <script>
                alert('Data Dosen Berhasil di Tambahkan!!');
                document.location.href = 'index_dosen.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $no_wa = $_POST["no_wa"];
    // $tanggal_lahir = $_POST["tanggal_lahir"];

    tambahDosen($conn, $nip, $nama, $no_wa);
}

$conn = null;
