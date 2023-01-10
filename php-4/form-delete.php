<?php
    include "config.php";

    $id = $_GET['id_mhs'];

    $data = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id'");

    while ($mhs = mysqli_fetch_row($data)) {
        $foto_mhs = $mhs['5'];
    }

        if(!empty($foto_mhs)){
            if(file_exists("img/".$foto_mhs)){
                echo $foto_mhs;
                unlink("img/".$foto_mhs);
            }
        }

    $delete = mysqli_query($db, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'");

    if($delete){
        header('Location: select-from.php');
    }else{
        echo "GAGAL";
    }
?>