<?php

$db = mysqli_connect("localhost", "root", "", "db_sekolah");


    // Menampilkan data dengan function
    function read($table, $condition = ""){
        global $db;

        $query = "SELECT * FROM " . $table . $condition;

        $cek = mysqli_query($db, $query);
        return $cek;
    }

    // Menambah data dengan function
    function input($data1, $data2, $data3, $data4, $data5, $tmp_data5){
        global $db;

        $upload = move_uploaded_file($tmp_data5, "img/" . $data5);

        $query = mysqli_query($db, "INSERT INTO mahasiswa (nama, tgl_lahir, nim, jurusan, foto) VALUES ('$data1', '$data2', '$data3', '$data4', '$data5')");
        
        if($query){
            header('Location: index.php');
        }else{
            echo "GAGAL";
        }
    }

    // edit
    function edit($data0, $data1, $data2, $data3, $data4, $data5, $tmp_data5, $data6){
        global $db;

        if($data5){

            if(file_exists("img/".$data6)){
                    unlink("img/".$data6);
            }

                $upload = move_uploaded_file($tmp_data5, "img/" . $data5);

                $query = mysqli_query($db, "UPDATE mahasiswa SET nama = '$data1', tgl_lahir = '$data2', nim = '$data3', jurusan = '$data4', foto = '$data5' WHERE id_mahasiswa = '$data0'");
            
                if($query){
                    echo '<script type="text/javascript">
                        window.location = "index.php"
                        </script>';
                        return $upload;
                }else{
                    echo "GAGAL";
                }
        }else{
            $query =    mysqli_query($db, "UPDATE mahasiswa SET nama = '$data1', tgl_lahir = '$data2', nim = '$data3', jurusan = '$data4' WHERE id_mahasiswa = '$data0'");
        
            if($query){
                echo '<script type="text/javascript">
                    window.location = "index.php"
                </script>';
            }else{
                echo "GAGAL";
            }
        }
    }

    // Menghapus data dengan function
    function delete($id){
        global $db;

        $delete = mysqli_query($db, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'");

        if($delete){
            header('Location: index.php');
        }else{
            echo "GAGAL";
        }

        return $delete;
    }
?>