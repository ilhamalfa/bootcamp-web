<?php

// Untuk Menampilkan
echo "Hello World";

// Membuat Variabel
$helo = "Hellow  World";
echo $helo;

$nim = 7708181057;
$nama = "Liam Niskala";

// Menambahkan Tag HTMl
echo "<br> NIM = ". $nim . "<br> Nama = ". $nama ."<br>";

// Contoh Menggunakan Neda-beda Tipe Data
$nim = "7708181057"; //String
$nama = "Liam Niskala"; //String
$sks = 1; //Int
$nilai = 82.10; //Float
$status = true; //Boolean

echo "NIM = ". $nim ."<br>";
echo "Nama = ". $nama ."<br>";
print "SKS = ". $sks ."<br>";
printf("Nilai = %.3f<br>",$nilai); //Menggunakan 2 Parameter (Dibatasi oleh koma)

// Boolean
if($status == true){
    echo "Status = Aktif <br>";
}else{
    echo "Status = Tidak Aktif <br>";
}

// If-else bali-rema-dewa
$balita = 5;
$remaja = 17;
$dewasa = 25;

$umur = "15";

if($umur <= $balita){
    echo "Balita <br>";
}else if($umur <= $remaja){
    echo "Remaja <br>";
}else{
    echo "Dewasa <br>";
}

?>
