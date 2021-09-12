<?php


class perhitungan {

    //property/atribut
   var $pemilik;
   var $merk;
   var $ukuran_layar;

   //method/function
  

function luaspersegi($s){
    echo "Menghitung Luas Persegi <br>";
    echo "Sisi : ". $s . "<br>";
    $luas = $s * $s;
    echo "Luasnya : ".$luas;
    
    

    
 }

function luassegitiga($a, $t){
    echo "Menghitung Luas Segitiga <br>";
    echo "Alasnya : ". $a . "<br>";
    echo "Tingginya : ". $t . "<br>";
    $luassegitiga = 0.5 * $a * $t;
    echo "Luasnya : ". $luassegitiga;
    
    

    
   
}


function luaslingkaran($jari){
    
    echo "Menghitung Luas Lingkaran <br>";
    $phi = 3.14;
    echo "Phi : ". $phi . "<br>";
    echo "Jari-Jari : ". $jari .  "<br>";
    $luaslingkaran = $phi * $jari * $jari;
    echo "Luasnya : ". $luaslingkaran;
    
    
    

    
     
}
}

//object
$hitung = new perhitungan();

echo $hitung->luaspersegi(10);
echo "<hr>";
echo "<br>";

echo $hitung->luassegitiga(10,5);
echo "<hr>";
echo "<br>";

echo $hitung->luaslingkaran(10);
echo "<hr>";



?>