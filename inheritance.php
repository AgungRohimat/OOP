<?php

class manusia{
 
	// property class manusia
	public $teman = "Maudy";	
 
 	// method pada class manusia
	protected function berinama(){
		
        echo "Nama Saya Agung <br>";
	}
	
}
 
// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia{
 
	// property class teman
	// public $nama_teman;
 
 	// method pada class teman
	public function berinamateman(){
		// echo $this->berinama();
        echo "Nama Teman Saya ". $this->teman;
	}
}
 
// instansiasi class teman
$malasngoding = new teman;
 
// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya karena telah menghubungkan class teman dengan class manusia

$malasngoding->berinamateman();
 

?>