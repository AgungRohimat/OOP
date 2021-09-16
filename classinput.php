<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" id=""></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name= "proses" value="Proses"></td>
            </tr>
        </form>
    </table>
</body>
</html>


<?php

if (isset($_POST["proses"])) {
   $nik = $_POST['nik'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];

   class Input
   {
       public $x;
       public $y;
       public $z;

       public function data($x,$y,$z)
       {
           $this->x = $x;
           $this->y = $y;
           $this->z = $z;
       }
   }

   $data = new Input();
   $data->data($nik,$nama,$kelas);

   echo "NIK : ". $data->x."<br>";
   echo $data->y."<br>";
   echo $data->z;
}

?>