<?php

// cara membuat function tidak memakai class
function ngoding(){


}

//function bisa dikategorikan menggunakan public, protected, private 
class vscode{
    public function coding_php(){

    }
}

//mencoba buat fungsi sapa temen
function sapa_teman(){
    echo "<h1>Hai Gess</h1>";
    echo "<h3>Yeyyy Ketemu lagii</h3>";
}

//membuat fungsi yang ada parameter
function teman($teman_gweh, $umur){
    echo "<h2> He ges disini gweh sama ($teman_gweh)</h2>";
    echo "<h2> umur dia segini ($umur)</h2>";
}

//cara panggil fungsi
//tuliskan nama fungsi nya bersamaan
sapa_teman();

// jika fungsi menggunakan parameter
teman("cihuyy", 90);

// mencoba membuat fungsi menggunakan percabangan
function kasir($nama, $jumlah){
    echo "<h3> Hai ($nama), Terimakasih telah berkunjung!! <h3>";
    echo "<h3> Dan jangan lupa kembali lagi!! <h3>";

// membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
if ($jumlah >10){
    echo "<h3>Gokilll, Kamu dapat mobi karena telah berkunjung sebanyak ($jumlah) kali";
}

}

//panggil fungsinya dan isi  parameter
kasir ("akbar", 11);
?>