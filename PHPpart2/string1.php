<?php

$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";


echo "<p>$loremIpsum</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

echo "<br>";
echo "<br>";

echo "Baris\nbaru <br>"; // soal 10.a
echo 'Baris\nbaru <br>'; // soal 10.b
echo "Halo\rdunia <br>"; // soal 10.c
echo 'Halo\rdunia <br>'; // soal 10.d
echo "<pre>Halo\tDunia</pre>"; // soal 10.e
echo '<pre>Halo\tDunia</pre>'; // soal 10.f
echo "Katakanlah \"Tidak pada narkoba!\" <br>";
echo 'Katakanlah \'Tidak pada narkoba!\' <br>';
// soal 10.g
// soal 10.h

echo "<br>";
echo "<br>";

$pesan = "saya arek Malang!";
echo strrev($pesan) . "<br>";

echo "<br>";
echo "<br>";

$pesan = "saya arek Malang!";
$pesanPerkata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan)  => strrev($pesan), $pesanPerkata);
$pesan = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
?>