<?php
// 1. BUAT VARIABEL DATA DIRI DI SINI
$nama = "RADITYA FATHAN ALBANI";
$kelas = "XI RPL";
$hobi = "Coding & Main Game";
$warna_latar = "#1a237e";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body { 
            background-color: #f4f4f4; 
            font-family: Arial, sans-serif; 
        }
        .kartu {
            /* 2. PANGGIL VARIABEL WARNA LATAR DI DALAM CSS INI */
            background-color: <?php echo $warna_latar; ?>;
            color: white;
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <!-- 3. PANGGIL VARIABEL DATA DIRI DI SINI -->
        <h2><?php echo $nama; ?></h2>
        <p>Kelas: <?php echo $kelas; ?></p>
        <hr>
        <p>Hobi: <?php echo $hobi; ?></p>
    </div>
</body>
</html>