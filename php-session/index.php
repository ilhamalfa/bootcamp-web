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

        $condition = "";
        // function read dari config
        $get_data = read('mahasiswa', $condition);

        if(isset($_GET['hapus'])){
            $hapus = delete($_GET['id']);
        }
    ?>

    <a href="tambah.php">tambah data</a>

    <table>
        <thead>
            <tr>
                <th>id mahasiswa</th>
                <th>nama</th>
                <th>tanggal lahir</th>
                <th>NIM</th>
                <th>Gambar</th>
                <th>Jurusan</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
while ($data = mysqli_fetch_array($get_data)) {
    ?>
            <tr>
                <td><?= $data[0] ?></td>
                <td><?= $data[1] ?></td>
                <td><?= $data[2] ?></td>
                <td><?= $data[3] ?></td>
                <td><img src="img/<?= $data[4] ?>" alt="" height="100px"></td>
                <td><?= $data[5] ?></td>
                <td><a href="edit.php?id=<?= $data[0] ?>">Edit</a></td>
                <td><form action="" method="GET">
                    <input type="text" value="<?= $data[0] ?>" id="id" name="id" hidden> 
                    <input type="submit" id="hapus" name="hapus" value="hapus">
                </form></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>