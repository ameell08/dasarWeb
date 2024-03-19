<?php

//membuat fungsi
function perkenalan($nama, $salam){
    echo $salam. ",";
    echo "Perkenalkan nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan Anda <br><br>";
}

// memanggil fungsi 
perkenalan("Amelia", "Haloo");

echo "<hr>";
$saya = "Fitri";
$ucapSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya, $ucapSalam);
?>