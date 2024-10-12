<?php
require 'koneksi.php';

function hapusDosen($conn, $nip)
{
    $sql = "DELETE FROM dosen WHERE nip=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nip]);
    echo "
            <script>
                alert('Data Berhasil Dihapus!!');
                document.location.href = 'index_dosen.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST["nip"];
    hapusDosen($conn, $nip);
}

$conn = null;
