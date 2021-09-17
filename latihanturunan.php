<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <img src="b.jpg" >
        <h2>PENGGAJIHAN</h2>
        <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
    <table>
        <form action="" method="post">
            <tr>
                <td>No</td>
                <td><input type="number" name="no" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td>
                    <select name="unit" id="">
                        <option value="tk">TK</option>
                        <option value="sd">SD</option>
                        <option value="mts">MTS</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="smk">SMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" id=""></td>
            </tr>

            <tr>
                <td></td>
                
                <td><b>Gaji</b></td>
               </tr>
               <tr>
                <td>Jabatan</td>
                <td><select name="jabatan" id="">
                    <option value=""></option>
                    <option value="Kepala_Sekolah">Kepala Sekolah</option>
                    <option value="Guru">Guru</option>
                    <option value="Karyawan">Karyawan</option>
                </select></td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
                <td><input type="number" name="lk" id=""></td>
            </tr>
            <tr>
                <td>Status Kerja </td>
                <td><select name="sk" id="">
                    <option value=""></option>
                    <option value="Pegawai_Tetap">Pegawai Tetap</option>
                    <option value="Pegawai_Kontrak">Pegawai Kontrak</option>
                </select></td>
            </tr>
            
            <tr>
                <td></td>
                
                <td><b>Potongan</b></td>
               </tr>
               <tr>
                   <td>BPJS</td>
                   <td><input type="number" name="bpjs" id=""></td>
               </tr>
               <tr>
                   <td>Pinjaman</td>
                   <td><input type="number" name="pjm" id=""></td>
               </tr>
               <tr>
                   <td>Tabungan</td>
                   <td><input type="number" name="tbn" id=""></td>
               </tr>
               <tr>
                   <td>Lainnya</td>
                   <td><input type="number" name="lny" id=""></td>
               </tr>
               <tr>
                   <td></td>
                   <td><input type="submit" name="proses" value="Proses"></td>
               </tr>
        </form>
    </table>
</center>
</body>
</html>
<?php

if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lk = $_POST['lk'];
    $sk = $_POST['sk'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pjm'];
    $tabungan = $_POST['tbn'];
    $lainnya = $_POST['lny'];

    class penggajihan
    {
        public $no;
        public $nama;
        public $unit;
        public $tgl;
        public $jabatan;
        public $lk;
        public $sk;
        public $bpjs;
        public $pinjaman;
        public $tabungan;
        public $lainnya;
        
        
       

        public function penggajihan1($no,$nama,$unit,$tgl){
            $this->no = $no;
            $this->nama = $nama;
            $this->unit = $unit;
            $this->tgl = $tgl;

            echo "No : ". $no . "<br>";
            echo "Nama : ". $nama . "<br>";
            echo "Unit : ". $unit . "<br>";
            echo "Tanggal : ". $tgl . "<br>";
        }
    }

    class gaji extends penggajihan{

        public function gaji1($jabatan,$lk,$sk){
            
            $this->jabatan = $jabatan;
            $this->lk = $lk;
            $this->sk = $sk;

           
            echo "Jabatan : ". $jabatan . "<br>";
            if($jabatan == "Kepala_Sekolah"){
                $gaji = 5000000;
                echo "Gaji Pokok : Rp. ".$gaji. "<br>";
            }
            else if($jabatan == "Guru"){
                $gaji = 3000000;
                echo "Gaji Pokok : Rp. ".$gaji. "<br>";
            }
            else if($jabatan == "Karyawan"){
                $gaji = 1500000;
                echo "Gaji Pokok : Rp. ".$gaji. "<br>";
            }
            else{
                echo "Jabatan Tidak Ada";
            }

            if ($lk >= 0 && $lk <=5) {
                $bonus = 250000;
                echo "Bonus : ". $bonus. "<br>";
             }else{
                echo "Jabatan Tidak Ada";
            }

             if ($sk == "Pegawai_Tetap") {
                 $tunjangan = 500000;
                 echo "Status Kerja : ". $sk. "<br>";
                 echo "Tunjangan : ". $tunjangan. "<br>";
             }
             elseif ($sk == "pk") {
                 $tunjangan = 0;
                 echo "Status Kerja : ". $sk. "<br>";
             }

             $total_gaji = $gaji + $bonus + $tunjangan;
             echo "Total Gaji :" . $total_gaji; 

        }

       
        

    }
    class potongan extends penggajihan{

       

    }

    $total = new penggajihan();
    $total1 = new gaji();
    

     $total->penggajihan1($no,$nama,$unit,$tgl);
    $total1->gaji1($jabatan,$lk,$sk);
   
    
}

?>