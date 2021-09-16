<?php
 
//class manusia
class manusia{
   
   
    function __construct($nama,$jk,$kelas){
       echo "Nama Saya : ". $nama. "<br>";
       echo "Jenis Kelamin : ". $jk. "<br>";
       echo "Kelas : ". $kelas;
       echo "<hr>";
    }
    
    
   
    
}
//instansiasi class manusia
$manusia = new manusia("Agung","Laki-Laki","XII RPL 1");
$manusia = new manusia("Rifa","Perempuan","XII RPL 2");
$manusia = new manusia("Syukur","Laki-Laki","XII RPL ");
 


?>