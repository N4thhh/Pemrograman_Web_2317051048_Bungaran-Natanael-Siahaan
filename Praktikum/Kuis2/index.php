<?php
include 'koneksi/db.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <button><a href="tambah.php">Tambah</a></button>
    </div>
    <table border="1">
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> NPM </th>
            <th> File </th>
            <th> Action </th>
        </tr>
        <?php
        $no = 1;
        $query = "SELECT * FROM data";
        $result = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $no++; ?> </td>
            <td> <?php echo $row['nama']; ?> </td>
            <td> <?php echo $row['npm']; ?> </td>
            <td><img src='{$row['file']}' width='100' height='100'></td>
                <td> 
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>