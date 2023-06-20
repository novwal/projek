<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "masjid";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil total uang
$sql = "SELECT SUM(jumlah_uang) AS total_uang FROM tabel_duit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalMoney = $row["total_uang"];
    echo $totalMoney;
} else {
    echo "0";
}

$conn->close();
?>
