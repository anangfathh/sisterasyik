<?php
require 'koneksi.php';

function updateKHS($conn, $id, $nilai)
{
    $sql = "UPDATE perkuliahan SET nilai=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nilai, $id]);
    echo "
            <script>
                alert('Kartu Studi Berhasil di Update!!');
                document.location.href = 'index_perkuliahan.php';
            </script>
        ";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nilai = $_POST["nilai"];

    updateKHS($conn, $id, $nilai);
}

$conn = null;
