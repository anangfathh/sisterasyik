<?php
require 'koneksi.php';

function hapusKHS($conn, $id)
{
    $sql = "DELETE FROM perkuliahan WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    echo "
            <script>
                alert('Data Berhasil Dihapus!!');
                document.location.href = 'index_perkuliahan.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    hapusKHS($conn, $id);
}

$conn = null;
