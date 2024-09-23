<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil operasi <br>";
    echo "Hasil tambah : {$hasilTambah} <br>";
    echo "Hasil kurang: {$hasilKurang} <br>";
    echo "Hasil kali: {$hasilKali} <br>";
    echo "Hasil bagi: {$hasilBagi} <br>";
    echo "Sisa bagi: {$sisaBagi} <br>";
    echo "Hasil pangkat: {$pangkat} <br>";

    
    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil sama : {$hasilSama} <br>";
    echo "Hasil tidak sama : {$hasilTidakSama} <br>";
    echo "Hasil lebih kecil : {$hasilLebihKecil} <br>";
    echo "Hasil lebih besar : {$hasilLebihBesar} <br>";
    echo "Hasil lebih kecil sama : {$hasilLebihKecilSama} <br>";
    echo "Hasil lebih besar sama : {$hasilLebihBesarSama} <br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil And : {$hasilAnd} <br>";
    echo "Hasil Or : {$hasilOr} <br>";
    echo "Hasil Not A : {$hasilNotA} <br>";
    echo "Hasil Not B : {$hasilNotB} <br>";

    $a += $b;
    echo "Hasil : $a <br>";
    $a -= $b;
    echo "Hasil : $a <br>";
    $a *= $b;
    echo "Hasil : $a <br>";
    $a /= $b;
    echo "Hasil : $a <br>";
    $a %= $b;
    echo "Hasil : $a <br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil identik : {$hasilIdentik} <br>";
    echo "Hasil tidak identik : {$hasilTidakIdentik} <br>";

    $totalKursi = 45;
    $kursiDitempati = 28;
    $kursiKosong = $totalKursi - $kursiDitempati;
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;

    echo "Persentase kursi kosong = {$persentaseKosong}%<br>";
    echo "<br>";
?>