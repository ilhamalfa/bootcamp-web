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

    if(isset($_POST['submit'])){
        $insert = input($_POST['nama'], $_POST['ttl'], $_POST['nim'], $_POST['jurusan'], $_FILES['foto']['name'], $_FILES['foto']['tmp_name']);
    }

    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        nama = <input type="text" id="nama" name="nama"> <br>
        ttl = <input type="date" id="ttl" name="ttl"> <br>
        nim = <input type="number" id="nim" name="nim"> <br>
        jurusan = <select name="jurusan" id="jurusan">
                    <option value="multimedia">multimedia</option>
                    <option value="sastra">sastra</option>
                    <option value="agama">agama</option>
                    <option value="olahraga">olahraga</option>
                </select> <br>
        foto = <input type="file" id="foto" name="foto"> <br>
        <input type="submit" name="submit">
    </form>

</body>
</html>