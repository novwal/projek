<!DOCTYPE html>
<html>
<head>
    <title>Input Uang</title>
    <style>
        .card {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .input-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-field {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>


<?php
    $total_uang = 0;
    $jumlah_orang = 0;

    if (isset($_POST['submit'])) {
        $uang = (float)$_POST['uang'];
        $total_uang += $uang;
        $jumlah_orang++;
    }
    ?>

    <form method="post" action="halaman.php">
        <label for="uang">Jumlah uang yang diinputkan:</label>
        <input type="number" name="uang" id="uang" required>
        <input type="submit" name="submit" value="Tambah">
    </form>

    <h2>Jumlah Total Uang: <?php echo number_format($total_uang); ?></h2>
    <h2>Jumlah Orang: <?php echo $jumlah_orang; ?></h2>

    <div class="progress-bar">
        <div class="progress" id="progress" style="width: 0%;"></div>
    </div>