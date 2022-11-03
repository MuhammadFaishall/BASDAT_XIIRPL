<?php
//class smkjp1

class smkjp1{
    //properti
    var $guru;
    var $murid;

    //function terdiri
    function berdiri(){
        return "berdiri dengan tegap";
    }

    function berlari(){
        return "berlari 1000 langkah";
    }
}
//intelisasi
$sekolah = new smkjp1();

//isi property
$sekolah->guru = "Pak Saipullll";
$sekolah->murid = "Ahmad K";

//tampilan
echo $sekolah->guru," ", $sekolah->berdiri();
echo "<br/>";
echo $sekolah->murid," ", $sekolah->berlari();
echo "<br/>";

?>