<?php

class smkjp{

    var $kepsek;
    var $guru;
    var $murid;

    function paklilik(){
        return "Pak Lilik";
    }
    function paksaiful(){
        return "Pak Saiful";
    }
    function hasan(){
        return "Hasan";
    }

}
//intelasi
$sekolah = new smkjp();

$sekolah->kepsek= "Kepsek Kita Adalah";
$sekolah->guru= "Guru Kita Adalah";
$sekolah->murid= "Murid Kita Adalah";

//
echo $sekolah->kepsek," ", $sekolah->paklilik();
echo "<br />";
echo $sekolah->guru," ", $sekolah->paksaiful();
echo "<br />";
echo $sekolah->murid," ", $sekolah->hasan();

?>