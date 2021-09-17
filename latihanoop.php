<?php

// class
class penggajihan{

    // property

    // method
    public function gaji($jabatan, $pendidikan){
      
        echo "<b>Pendapatan </b>";
        echo "<br><br>";
        echo "Jabatan : ".$jabatan;
        echo "<br>";
        
        
        if($jabatan == "Direktur"){
            $gaji = 10000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else if($jabatan == "Manager"){
            $gaji = 5000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else if($jabatan == "Karyaan"){
            $gaji = 3000000;
            echo "Gaji Pokok : Rp. ".$gaji;
        }
        else{
            echo "Jabatan Tidak Ada";
        }

        
        if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;

            echo "<br>";
        }
        else if($pendidikan == "SMA"){
            $tunjangan = 1000000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;
            echo "<br>";
        }
        else if($pendidikan == "S1"){
            $tunjangan = 2000000;
            echo "<br>";
            echo "Pendidikan : ".$pendidikan;
            echo "<br>";
            echo "Tunjangan : Rp. ".$tunjangan;
            echo "<br>";
        }
        else{
            echo "Tidak Ada";
        }

        // menghitung total gaji
        $totalg = $gaji + $tunjangan;
        echo "Total Gaji : Rp. ";
        return $this -> totalg = $totalg;
    }

    public function pengeluaran($listrik, $kontrak, $kendaraan){
        echo "<hr>";
        echo "<br>";
        echo "<b>Pengeluaran</b>";
        echo "<br><br>";
        echo "Bayar Listrik : Rp. ".$listrik;
        echo "<br>";
        echo "Bayar Kontrakan : Rp. ".$kontrak;
        echo "<br>";
        echo "Cicilan Kendaraan : Rp. ".$kendaraan;

        
        $totalp = $listrik + $kontrak + $kendaraan;
        echo "<br>";
        echo "Total Pengeluaran : Rp. ";
        return $this -> totalp = $totalp;
    }

    public function sisa(){
        echo "<hr>";
        echo "<b>Sisa : </b>Rp. ";
        echo $totals = ($this->totalg - $this->totalp);
    }
}


$jumlah = new penggajihan();


echo $jumlah -> gaji("Manager", "SMA");
echo $jumlah -> pengeluaran(20, 30, 50);
echo $jumlah -> sisa();

?>