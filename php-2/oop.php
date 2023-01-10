<?php

    // Membuat kelas
    class manusia {
        // Dijalankan pertama kali pada suatu kelas
        public function __construct(){
            echo "Biodata <br>";
        }

        // Membuat Fungsi
        function nama($nama){
            return "Nama Saya $nama <br>";
        }

        // Dijalankan paling akhir pada suatu kelas
        function __destruct(){
            echo "Terimakasih";
        }


    }

    // Membuat Variabel untuk memanggil kelasnya
    $man = new manusia();

    // Memanggil fungsi nama pada kelas manusia
    // echo $man->nama('aaaa');

    // Penurunan dari kelas manusia
    class teman extends manusia{
        function namateman($nama){
            return "Nama Teman Saya $nama <br>";
        }
    }

    $teman = new teman();

    // Pewarisan function nama dari kelas manusia (kelas induk)
    echo $teman->nama('aaaa');

    echo $teman->namateman('aaaa');
?>