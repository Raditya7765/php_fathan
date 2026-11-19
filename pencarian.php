<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mesin Pencari RPL</title>
</head>
<body>

    <h2>Mesin Pencari RPL</h2>
    
    <!-- action="" dikosongkan artinya data dikirim ke file ini sendiri -->
    <form action="" method="GET">
        <input type="text" name="kata_kunci" placeholder="Cari apa saja...">
        <button type="submit">Cari</button>
    </form>
    
    <hr>

    <?php
    // isset() bertugas mengecek: "Apakah sudah ada data 'kata_kunci' yang dikirim?"
    // Kalau belum klik tombol Cari, bagian di dalam kurung kurawal {} tidak akan dijalankan.
    if (isset($_GET['kata_kunci'])) {
        $cari = htmlspecialchars($_GET['kata_kunci']);
        echo "<p>Menampilkan hasil pencarian untuk: <b>{$cari}</b></p>";
    }
    ?>

</body>
</html>