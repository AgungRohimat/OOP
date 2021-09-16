<?php
 
//class manusia
class manusia{
   
   
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }
    
    
    //method manusia
    function nama(){
        return "Nama saya Agung <br/>";
    }
    function kelas(){
        return "XII RPL 1 <br>";

    }
    function hobi(){
        return "Basket <br>";

    }
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->nama();
echo $manusia->kelas();
echo $manusia->hobi();



?>