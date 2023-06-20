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

// Proses input jumlah uang secara manual
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jumlah_uang = $_POST["jumlah_uang"];

    // Masukkan jumlah uang ke dalam tabel "uang"
    $sql1 = "INSERT INTO tabel_duit (jumlah_uang) VALUES ('$jumlah_uang')";
    if ($conn->query($sql1) === TRUE) {
        echo "Jumlah uang berhasil diinput ke tabel_uang.";
    } else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
    }

    // Masukkan data pengguna ke dalam tabel "pengguna"
    $sql2 = "INSERT INTO tabel_pengguna (Nama, jumlah_uang) VALUES ('$nama', '$jumlah_uang')";
    if ($conn->query($sql2) === TRUE) {
        echo "Data pengguna berhasil diinput ke tabel_pengguna.";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
}

$conn->close();
?>
