<?php
// Mengisi Variabel
$db_serverName = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "db_sekolah";

// Menyambungkan Database
$db = mysqli_connect($db_serverName, $db_username, $db_password, $db_name);

// Mengecek database sudah berhasil konek apa belum
// if($db){
//     echo "Berhasil Konek";
// }else{
//     echo "Gagal Konek";
// }
