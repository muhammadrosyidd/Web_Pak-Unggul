<?php
    $angka1 = 10;
    $angka2 = 5;
    $hasil = $angka1 + $angka2;
        echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";
    
    $benar = true;
    $salah = false;
        echo "Variabel benar : $benar, Variabel salah : $salah.";

    //mendefinisikan konstanta nilai tetap
    define("Nama_Situs", "WebsiteKu.com");
    define("Tahun_Pendirian", 2023);

    echo "Selamat datang di " . Nama_Situs . 
    ", situs yang didirikan pada tahun " . Tahun_Pendirian . ".";
?>