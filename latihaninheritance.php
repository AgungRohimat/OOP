<?php

class bangun_datar{

    //property
    
	
	public function bangundatar(){
         
		echo "Menghitung Luas : ";
        echo "<br>";
        echo "1. Persegi ";
        echo "<br>";
        echo "2. Persegi Panjang ";
        echo "<br>";
        echo "3. Segitiga ";
        echo "<br>";
        echo "4. Lingkaran ";
        echo "<br>";
        echo "<hr>";
        
        
	}
	
}
 

class persegi extends bangun_datar{
 
	
	public function luas_persegi($sisi){
      echo $this->bangundatar();
      echo "Sisi : ". $sisi. "<br>";
		  echo "Luas Persegi : ";
        $luas = $sisi * $sisi;
  
         echo $luas . "<br>";
         $keliling = 4 * $sisi;
         echo "Keliling Persegi : ";
         echo $keliling;
       
         echo "<br>";
         echo "<hr>";
	}
}

class persegi_panjang extends bangun_datar{
 
	
	public function luas_persegipanjang($p,$l){
        echo "Panjang : ". $p. "<br>";
        echo "Lebar : ". $l. "<br>";
        echo "Luas Persegi Panjang : ";
        $luaspersegipanjang =$p * $l;

     echo $luaspersegipanjang . "<br>";
     $keliling = 2 * ($p + $l);
     echo "Keliling Persegi Panjang :" . $keliling;
     echo "<br>";
     echo "<hr>";
	}
}

class segitiga extends bangun_datar{
 
	
	public function luas_segitiga($t, $a, $b, $c){
        echo "Tinggi : ". $t. "<br>";
        echo "Alas : ". $a. "<br>";
       echo "Luas Segitiga : ";
		$luassegitiga = 0.5 * $a * $t;
    
    echo $luassegitiga . "<br>";
    $keliling = $a + $b + $c;
    echo "Keliling Segitiga : ". $keliling;
    echo "<br>";
         echo "<hr>";
	}
}

class lingkaran extends bangun_datar{
 
	
	public function luas_lingkaran($jari){
        $v = 3.14;
        echo "Phi : ". $v . "<br>";
        echo "Jari - Jari : ". $jari . "<br>";
        echo "Luas Lingkaran : " ;
        $luaslingkaran = $v * $jari * $jari;
    

    
       echo $luaslingkaran . "<br>";
       $keliling = 2 * $v * $jari;
       echo "Keliling Lingkaran : " . $keliling;
       echo "<br>";
       echo "<hr>";
	}
}
 
$hasil = new persegi;
$hasil1 = new persegi_panjang;
$hasil2 = new segitiga;
$hasil3 = new lingkaran;


$hasil->luas_persegi(5);
$hasil1->luas_persegipanjang(5,5);
$hasil2->luas_segitiga(5,6,4,6);
$hasil3->luas_lingkaran(6);


?>