<?php
require 'koneksi.php';

function updateDosen($conn, $nip, $nama, $no_Wa)
{
    $sql = "UPDATE dosen SET nama=?, no_wa=? WHERE nip=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nama, $no_Wa, $nip]);
    echo "
            <script>
                alert('Data Dosen Berhasil di Update!!');
                document.location.href = 'index_dosen.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $no_wa = $_POST["no_wa"];
    // $tanggal_lahir = $_POST["tanggal_lahir"];

    updateDosen($conn, $nip, $nama, $no_wa);
}

$conn = null;
