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
<?php
// Menambah file untuk menggabungkan database
include 'config.php';

?>

<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Ship Country</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $ambils = mysqli_query($db, "SELECT * FROM employees emp join Orders ord on emp.EmployeeID = ord.EmployeeID where ord.ShipCountry = 'France'");

            foreach ($ambils as $ambil) { ?>
            <tr>
                <th scope="row"><?php echo $ambil["EmployeeID"] ?></th>
                <td><?php echo $ambil["LastName"] ?></td>
                <td><?php echo $ambil["FirstName"] ?></td>
                <td><?php echo $ambil["ShipCountry"] ?></td>
            </tr>
            <?php  } ?>
    </tbody>
</table>
</div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>