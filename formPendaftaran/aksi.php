<?php
echo "Nama Lengkap : ".$_GET['NamaLengkap']."<br>";
echo "TTL : ".$_GET['TanggalLahir']."<br>";
echo "Kelas : ".$_GET['Kelas']."<br>";
echo "Email : ".$_GET['email']."<br>";
echo "Nomor HP : ".$_GET['emailnomorHP']."<br>";
echo "Alamat : ".$_GET['Alamat']."<br>";
echo "Jenis Kelamin : ".$_GET['jk']."<br>";
echo "Ekskul : ";
foreach ($_GET['ekskul'] as $ekskul){
    echo $ekskul.",";
}
echo"<br>";