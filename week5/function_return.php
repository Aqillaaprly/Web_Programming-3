<?php
//membuat fungsi 
function hitunganUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo " Umur saya adalah " . hitunganUmur(2004, 2024) ."tahun"

?>