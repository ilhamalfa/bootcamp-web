<?php
// Membuat Array
$a = array();
$b = ['aaa','bbb','ccc','ddd'];
$i = 0;
// PHP hanya bisa menampilkan 1 isi array
// echo $b[1] ."<br>";

// Jika menampilkan semua menggunakan looping
// for($i = 0; $i < count($b); $i++){
//     echo "[". $b[$i]. "]";
// }

// Menggunakan Foreach
// foreach($b as $array){
//     echo "[". $array. "]";
// }

// Array Menggunakan Nama
$c = [
    'nama' => 'aaa',
    'kelas' => 'bbb'
];

// echo $c['nama'];

foreach ($c as $nama_array => $array_value){
    echo "$nama_array adalah $array_value";
}
?>