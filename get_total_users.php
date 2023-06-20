<?php
// Koneksi ke database (gunakan yang sama dengan get_total_money.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "masjid";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk mengambil total user
$sql = "SELECT COUNT(*) AS total
