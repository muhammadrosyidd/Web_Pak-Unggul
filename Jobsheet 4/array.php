<?php
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
        }
    }

    echo "Daftar nilai siswa yang lulus : " . implode(', ' , $nilaiLulus);
    echo "<br><br>";

    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 7],
        ['Eva', 6]
    ];

    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarKaryawan as $karyawan){
        if ($karyawan[1] > 5){
            $karyawanPengalamanLimaTahun[] =  $karyawan[0];
        }
    }
    
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(', ' , $karyawanPengalamanLimaTahun);

    echo "<br><br>";
    $daftarNilai = [
        'Matematika' => [
            ['Alice', 85],
            ['Bob', 92],
            ['Charlie', 78]
        ],
        'Fisika' => [
            ['Alice', 90],
            ['Bob', 88],
            ['Charlie', 75]
        ],
        'Kimia' => [
            ['Alice', 92],
            ['Bob', 80],
            ['Charlie', 85]
        ],
    ];

    $mataKuliah = 'Fisika';

    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";

    foreach ($daftarNilai[$mataKuliah] as $nilai) {
        echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
    }

    echo "<br><br>";
    $daftarNilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
    ];
    $siswaDiAtasRerata = [];
        
    $totalNilai = 0;
    foreach ($daftarNilaiSiswa as $nilai) {
        $totalNilai += $nilai[1];
    }
        
    $nilaiRerata = $totalNilai / count($daftarNilaiSiswa);
        
    foreach ($daftarNilaiSiswa as $siswa) {
        if ($siswa[1] > $nilaiRerata) {
            $siswaDiAtasRerata[] = $siswa[0];
        }
    }
        
    echo "Siswa yang mendapatkan nilai lebih dari $nilaiRerata adalah: <br>" . implode(", ", $siswaDiAtasRerata);
    ?>