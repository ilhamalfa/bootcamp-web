<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Menyambungkan ke database -->
    <?php include 'config.php' ?>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- Form -->
    <div class="container m-4">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="ttl" name="ttl">
            </div>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim">
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                <?php 
                    $data_mhs = mysqli_query($db, "SELECT * FROM jurusan");
                    foreach ($data_mhs as $mhs) { ?>
                        <option value="<?php echo $mhs['id_jurusan'] ?>"><?php echo $mhs['jurusan'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <button class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Langsung Diproses Di halaman ini -->
    <?php
        if(isset ($_POST['submit'])){
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['ttl'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];
            $foto = $_FILES['foto']['name'];
            $tmp_name = $_FILES['foto']['tmp_name'];

            $upload = move_uploaded_file($tmp_name, "img/" . $foto);

            $query = mysqli_query($db, "INSERT INTO mahasiswa (nama, tgl_lahir, nim, jurusan, foto) VALUES ('$nama', '$tgl_lahir', '$nim', '$jurusan', '$foto')");
        
            if($query){
                header('Location: select-from.php');
            }else{
                echo "GAGAL";
            }
        }
    ?>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>