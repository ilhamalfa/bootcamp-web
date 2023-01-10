<!-- Menyambungkan ke database -->
<?php 
    include ('config.php'); 
    session_start();

    if(!$_SESSION){
        header('Location: index.php');
    }else if($_SESSION['role'] !== 'mahasiswa'){
        header('Location: admin.php');
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header('Location: index.php');
    }
?>
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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">HaloDek</a>
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
        <form method="POST">
            <button class="btn btn-danger" type="submit" name="logout">Log Out</button>
        </form>
        </div>
    </div>
</nav>

    <div class="container mt-3">
        <h3><?= $_SESSION['username'] . " (" . $_SESSION['role'] .")" ?></h3>
    </div>

    <!-- Pencarian -->
    <form action="search.php" method="GET">
        <div class="input-group mb-3 ms-auto me-auto mt-5 w-50">
            <input type="text" class="form-control" placeholder="Search Here..." name="search" id="search">
            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
        </div>
    </form>

    <div class="container mt-3">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $data_mhs = mysqli_query($db, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.jurusan = jurusan.id_jurusan");

                    foreach ($data_mhs as $mhs) {
                ?>
                <tr>
                    <th scope="row"><?php echo $mhs['id_mahasiswa'] ?></th>
                    <td><?php echo $mhs['nama'] ?></td>
                    <td><?php echo $mhs['tgl_lahir'] ?></td>
                    <td><?php echo $mhs['nim'] ?></td>
                    <td><?php echo $mhs['jurusan'] ?></td>
                    <td> <img src="img/<?php echo $mhs['foto'] ?>" alt="" class="img-thumbnail" style="height: 50px;"> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>