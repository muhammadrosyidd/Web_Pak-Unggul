<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
        echo "Nilai huruf : A <br>";
    } else if ($nilaiNumerik >= 80 && $nilaiNumerik <= 90){
        echo "Nilai huruf : B";
    } else if ($nilaiNumerik >= 70 && $nilaiNumerik <= 80){
        echo "Nilai huruf : C";
    } else if ($nilaiNumerik < 70){
        echo "Nilai huruf : D";
    }

    
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget){
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer.";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);

    }
    
    echo "<br><br>";
    echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "<br><br>";
    echo "Total skor ujian adalah : $totalSkor";

    echo "<br><br>";
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
    }
    
    echo "<br>";

    rsort($nilaiSiswa);
    array_splice($nilaiSiswa, 0, 2);
    array_splice($nilaiSiswa, -2);
    $nilaiTotal = 0;

    foreach ($nilaiSiswa as $nilai) {
        $nilaiTotal += $nilai;
    }

    if (count($nilaiSiswa) > 0) {
        echo "Total nilai dari siswa setelah mengabaikan dua nilai tertinggi dan dua terendah adalah : $nilaiTotal<br>";
        echo "Nilai rata-rata dari nilai Siswa tersebut adalah : " . $nilaiTotal / count($nilaiSiswa);
    } else {
        echo "Tidak ada nilai siswa yang tersisa setelah pemotongan.";
    }
    echo "<br><br>";

    $hargaProduk = 120000;
    $totalHarga = $hargaProduk * 2;
    $hargaSetelahDiskon = 0;

    if ($totalHarga > 100000) {
        echo "Anda mendapat diskon sebesar 20%";
        $hargaSetelahDiskon = $totalHarga - (($totalHarga * 20) / 100);
        echo "<br> Total belanjaan anda adalah : Rp. {$hargaSetelahDiskon}";
    }
    echo "<br><br>";

    $totalSkor = 520;

    echo "Total skor pemain adalah : $totalSkor";
    echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

    if ($totalSkor > 500) {
        echo " Ya";
    } else {
        echo " Tidak";
    }
    echo "<br><br>";
?>