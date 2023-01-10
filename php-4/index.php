<!-- Connect -->
<?php 
    include ("config.php"); 
    session_start();

    if($_SESSION){
        header('Location: admin.php');
    }

    // Atau bisa menggunakan ini untuk mengecek session
    // if(!isset($_SESSION['username']) ){
    //     header('Location: admin.php');
    // }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($db, "SELECT * FROM user join role on user.id_role = role.id_role WHERE username = '$username'");
        $data = mysqli_fetch_array($query);

        if($data){
            // Untuk mengecek password yang telah di-enkripsi
            // if(password_verify($password, $data['password'])){
                if($password == $data['password']){
                $_SESSION['username'] = $data['username'];
                $_SESSION['role'] = $data['jenis_role'];
    
                if($data['jenis_role'] == 'admin'){
                    header('Location: admin.php');
                }else{
                    header('Location: mahasiswa.php');
                }
            }else{
                echo "<script>alert('Login Error!! Password Salah');</script>";
            }
        }else{
            echo "<script>alert('Login Error!! Username Tidak Terdaftar');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        </div> -->
    </div>
</nav>

<!-- Form -->
<div class="container p-3 mt-5 bg-light border border-2">
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username : </label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="showPass" onclick="show()">
            <label class="form-check-label" for="exampleCheck1">Show Password</label>
        </div>
        <div class="col p-1 mb-3">
            <a href="register.php" class="link-dark">Register</a>
        </div>
    <button type="submit" class="btn border btn-success" name="login">Login</button>
    </form>
</div>

<script>
    function show(){
        if(document.getElementById('showPass').checked == true){
            document.getElementById('password').type = 'text';
        }else{
            document.getElementById('password').type = 'password';
        }
    }
</script>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>