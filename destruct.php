<?php
class manusia{
    
    
    //method construct di jalankan pertama kali
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct($nama,$jk,$kelas){
        echo "ini adalah isi method destruct <br/>";
    }
    
    //method manusia
    function nama(){
        return "Nama saya Agung <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->nama();
?>