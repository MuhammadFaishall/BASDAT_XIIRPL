<?php

// Cara untuk mengakses class dan object
class mobil{
    //property
    var $merk;
    var $roda;
    var $kecepatan;

    //membuat fungsi / operasi berjalan { maju dan mundur}
    function jalan_maju(){
        return "vroommm majuu";
    }
    function jalan_mundur(){
        return "Vroommm ciiittt mundur";
    }
}

// instantsi (Menginstankan variabel yang menghubungkan dari class keluar class)
$mobil_keren = new mobil();

//set property (menhgisi property debab nebfajses diluar class)
$mobil_keren->merk = "Ferrari";
$mobil_keren->roda = "hitam";
$mobil_keren->kecepatan="300KmH";

//
echo $mobil_keren->merk;
echo "<br />";
echo $mobil_keren->roda;
echo "<br />";
echo $mobil_keren->kecepatan;
 
//tampilkan function
echo $mobil_keren->jalan_maju();
echo "<br />";
echo $mobil_keren->jalan_mundur();


?>