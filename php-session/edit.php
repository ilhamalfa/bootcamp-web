<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        include("config.php"); 

        $id = $_GET['id'];
        $condition = " where id_mahasiswa = ".$id;

        $get_data = read('mahasiswa', $condition);

        if(isset($_POST['submit'])){
            $edit = edit($_POST['id'], $_POST['nama'], $_POST['ttl'], $_POST['nim'],$_POST['jurusan'], $_FILES['foto']['name'], $_FILES['foto']['tmp_name'], $_POST['foto_name']);
        }

        while ($mhs = mysqli_fetch_array($get_data)) {
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" id="id" name="id" value="<?= $mhs[0] ?>" hidden>
        nama = <input type="text" id="nama" name="nama" value="<?= $mhs[1] ?>"> <br>
        ttl = <input type="date" id="ttl" name="ttl" value="<?= $mhs[2] ?>"> <br>
        nim = <input type="number" id="nim" name="nim" value="<?= $mhs[3] ?>"> <br>
        jurusan = <select name="jurusan" id="jurusan">
                    <option value="multimedia">multimedia</option>
                    <option value="sastra">sastra</option>
                    <option value="agama">agama</option>
                    <option value="olahraga">olahraga</option>
                </select> <br>
        foto = <input type="file" id="foto" name="foto"> <br>
        <input type="text" id="foto_name" name="foto_name" value="<?= $mhs[4] ?>" hidden>
        <input type="submit" name="submit">
    </form>
<?php }?>
</body>
</html>