<?php 
// Mohammad Ilham Alfarizqi

// Buatlah program untuk menampilkan ketentuan website jika umur diatas 18 dan sudah menikah dan berjenis kelamin laki-laki maka akan 
// menampilkan “Selamat Datang Pak !”, jika perempuan maka tampil ““Selamat Datang Bu !””. 
// Jika belum menikah dan berjenis kelamin laki laki maka tampil  “Selamat Datang anak laki laki!”,
// jika perempuan maka tampil “Selamat Datang anak perempuan!”.
// Jika umur dibawah 18 maka akan tampil “Website ini hanya untuk orang yang berumur 18+ !”.
// Dan minimal umur menikah adalah 25 tahun.

// 1.
echo "1. ";

$umur = 23;
$menikah = true;
$jk = "male";

if($umur >= 25 && $menikah == true && $jk == "male"){
    echo "Selamat Datang Pak !";
}else if($umur >= 25 && $menikah == true && $jk == "female"){
    echo "Selamat Datang Bu !";
}else if($umur >= 18 && $menikah == true && $jk == "male"){
    echo "minimal umur menikah adalah 25 tahun!";
}else if($umur >= 18 && $menikah == true && $jk == "female"){
    echo "minimal umur menikah adalah 25 tahun!";
}else if($umur >= 18 && $menikah == false && $jk == "male"){
    echo "Selamat Datang anak laki laki!";
}else if($umur >= 18 && $menikah == false && $jk == "female"){
    echo "Selamat Datang anak perempuan!";
}else{
    echo "Website ini hanya untuk orang yang berumur 18+!";
}

// Buatlah program menghitung Body Mass Index(BMI). 

// jika hasilnya kurang dari 18,5 maka akan tampil “berat badan anda kurang”,
// jika kurang dari 22,9 maka tampil “berat badan normal”,
// jika kurang dari 29,9 maka tampil “berat badan anda berlebih”,
// jika lebih dari 29,9 maka tampil “Obesitas”.

// 2.
echo "<br> 2. ";

$bb = 65;
$tb = 1.69;

$bmi = $bb / ($tb*$tb);

echo "BMI = ". $bmi . "<br>";

if($bmi < 18.5){
    echo "berat badan anda kurang";
}else if($bmi < 22.9){
    echo "berat badan normal";
}else if($bmi < 29.9){
    echo "berat badan anda berlebih";
}else{
    echo "Obesitas";
}


// Buatlah sebuah program untuk menampilkan grade nilai A sampai E,dengan rentan nilai 
// 0-59 E,
// 60-69 D, 
// 70-79 C, 
// 80-89 B,
// 90-100 A.

// 3.
echo "<br> 3. Nilai : ";

$nilai = 80;

if($nilai >= 90 && $nilai <= 100){
    echo "A";
}else if($nilai >= 80 && $nilai < 90){
    echo "B";
}else if($nilai >= 70 && $nilai < 80){
    echo "C";
}else if($nilai >= 60 &&$nilai < 70){
    echo "D";
}else if($nilai >= 0 &&$nilai < 60){
    echo "E";
}else{
    echo "Nilai Invalid";
}

// Buatlah program menampilkan nilai berkelipatan 3 dari 1-50.

// 4.
echo "<br> 4. ";

for($a = 1; $a <= 50; $a++){
    if($a % 3 == 0){
        echo "[".$a ."] ";
    }
}
?>

