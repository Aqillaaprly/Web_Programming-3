<?php

//membuat fungsi
function Perkenalan($nama, $salam){
    echo $salam . ", ";
    echo "Perkenalan, nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
Perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Aqilla";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
Perkenalan($saya,$ucapanSalam);
?>