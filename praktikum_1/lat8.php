<?php
    $namaBarang = $_POST["namaBarang"];
    $hargaSatuan = $_POST["hargaSatuan"];
    $jumlahBarang = $_POST["jumlahBarang"];
    $memberToko = $_POST["memberToko"];
    $diskonToko = 0.1;
    $diskonMember = 0.05;

    switch ($memberToko) {
        case "nonMember":
            $pembayaran = $hargaSatuan * $jumlahBarang * (1-$diskonToko);
            break;
        case "member":
            $pembayaran = $hargaSatuan * $jumlahBarang * (1-$diskonToko) * (1-$diskonMember);
            break;
    }
    
    echo "<h2>Selamat datang di toko malin kundang!</h2>";
    echo "<h2>Nama Barang: $namaBarang</h2><br>";
    echo "<h2>Harga Barang: $pembayaran </h2><br>";
    echo "<h2>Terima kasih telah berbelanja di toko malin kundang</h2>";
?>