<?php


//Public
//class manusia
// class manusia{
//     //prop
//     public $nama;

//     //method
//     public function  tampilkan_nama(){
//         echo "Nama Saya Agung";
//     }
//     public function biodata(){
//         echo $this->tampilkan_nama();
//     }
// }
// $manusia = new manusia();

// echo $manusia->biodata();


// Private
// class manusia{
//     //prop
//     private $nama = "Agung";

//     //method
//     public function  tampilkan_nama(){
//         return "Nama Saya " . $this->nama;
//     }
    
// }
// $manusia = new manusia();

// echo $manusia->tampilkan_nama();
// echo $manusia->nama;


// Protected
class manusia{
    //prop
 protected $nama = "Agung";

    //method
    public function  tampilkan_nama(){
        return "Nama Saya " . $this->nama;
    }
    
}
$manusia = new manusia();

echo $manusia->tampilkan_nama();
// echo $manusia->nama;

?>