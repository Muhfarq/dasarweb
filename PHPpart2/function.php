<?php
//function perkenalan($nama, $salam= "Assalamualaikum"){
//    echo $salam. ", ";
//    echo "perkenalkan, Nama saya " .$nama. "<br>";
//    echo "senang berkenalan dengan anda <br>";
//
//}
//perkenalan("Faruq","halo");
//
//echo "<hr>";
//
//$saya = "faruq";
//$ucapSalam = "Meet Pagi";
//
//perkenalan($saya);
//
//echo "<hr>";


function hitungUmur($thn_lahir, $thn_sekarang){
    $umur =  $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam= "Assalamualaikum"){
    echo $salam. ", ";
    echo "perkenalkan, Nama saya " .$nama. "<br>";

    echo "saya berusia ". hitungUmur(2005, 2024). " tahun<br>";
    echo "senang berkenalan dengan anda <br>";
}

perkenalan("faruq")
?>