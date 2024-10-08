<?php
$data = array("nama" => "Faruq", "usia" => 19);
$umur=$data["usia"];
// Inisialisasi variabel $umur dari array $data["usia"]

if (isset($umur) && $umur >= 18 ) {
    echo "Anda sudah dewasa <br>";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan <br>";
}
if (isset($data["nama"])) {
    echo " Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>
