<?php
//$nilaiSiswa = [85, 90, 78, 55, 87, 76, 74, 69, 87, 54];
//
//$nilaiLulus = [];
//
//foreach ($nilaiSiswa as $nilai) {
//    if ($nilai >= 70) {
//        $nilaiLulus[] = $nilai;
//    }
//}

//echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

echo"<br>";
echo"<br>";

$daftarkaryawan = [
    ['alice', 7],
    ['bob', 10],
    ['charlie', 5],
    ['budak', 8],
    ['diana', 6],
];

$karyawanPengalamanLimaTahun = [];

    foreach ($daftarkaryawan as $karyawan) {
        if ($karyawan[1] > 5) {
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }

echo "Daftar karyawan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);

echo"<br>";
echo"<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 90],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 80],
        ['Bob', 80],
        ['Charlie', 88],
    ],
    'Kimia' => [
        ['Alice', 86],
        ['Bob', 80],
        ['Charlie', 98],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai {$nilai[1]} <br>";
}