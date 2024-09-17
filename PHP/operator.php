<?php
$a = 10; 
$b = 5;

$hasilTambah = $a + $b;
echo $hasilTambah;
echo "<br>";
$hasilKurang = $a - $b;
echo $hasilKurang;
echo "<br>";
$hasilKali = $a * $b;
echo $hasilKali;
echo "<br>";
$hasilBagi = $a / $b;
echo $hasilBagi;
echo "<br>";
$sisaBagi = $a % $b;
echo $sisaBagi;
echo "<br>";
$pangkat = $a ** $b;
echo $pangkat;

echo "<br>";
echo "<br>";

$hasilSama = $a == $b;
echo $hasilSama;
echo "<br>";
$hasilTidakSama = $a != $b;
echo $hasilTidakSama;
echo "<br>";
$hasilLebihBesar = $a > $b;
echo $hasilLebihBesar;
echo "<br>";
$hasilLebihKecil = $a < $b;
echo $hasilLebihKecil;
echo "<br>";
$hasilLebihBesarSama = $a >= $b;
echo $hasilLebihBesarSama;
echo "<br>";
$hasilLebihKecilSama = $a <= $b;
echo $hasilLebihKecilSama;
echo "<br>";

echo "<br>";
echo "<br>";

$hasilAnd = $a && $b;
echo $hasilAnd;
echo "<br>";
$hasilOr = $a || $b;
echo $hasilOr;
echo "<br>";
$hasilNotA = !$a;
echo $hasilNotA;
echo "<br>";
$hasilNotB = !$b;
echo $hasilNotB;
echo "<br>";

$a += $b;
echo $a += $b;
echo "<br>";
$a -= $b;
echo $a -= $b;
echo "<br>";
$a *= $b;
echo $a *= $b;
echo "<br>";
$a /= $b;
echo $a /= $b;
echo "<br>";
$a %= $b;
echo $a %= $b;
echo "<br>";

$hasilIdentik = $a === $b;
echo $hasilIdentik;
echo "<br>";
$hasilTidakIdentik = $a !== $b;
echo $hasilTidakIdentik;
echo "<br>";
?>