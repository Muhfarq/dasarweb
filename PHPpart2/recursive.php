<?php
    //function tampilkanHaloDunia(){
    //    echo "Halo Dunia !  <br>";

    //    for ($i=1; $i <= 25; $i++) { 
    //        echo "perilangan ke-{$i} <br>";
    //    }
    //}
    //
    //tampilkanHaloDunia();

    function tampilkanAngka(int $jumlah, int $index = 1){
        echo "perilangan index ke-{$index} <br>";

        if ($index < $jumlah) {
            tampilkanAngka($jumlah, $index + 1);
        }
    }

    tampilkanAngka(20);
?>