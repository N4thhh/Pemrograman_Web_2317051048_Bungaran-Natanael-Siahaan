<?php
    include 'koneksi/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
        <label>
            <input type="text" name="nama" placeholder="Contoh:Hafidz">
        </label>
        <label>
            <input type="text" name="npm" placeholder="Contoh: 1234567890">
        </label>
        <label>
            <input type="file" name="path">
        </label>
        <button type="submit" name="submit">Submit</button>
    </form>
    <button><a href="index.php">Kembali</a></button>
   <?php
   if(isset($_POST['submit'])){
        $Nama = $_POST['nama'];
        $NPM = $_POST['npm'];
        $targetDir = "upload/";
        $fileName = basename($_FILES["path"]["name"]);
        $targetFile = $targetDir . time() . "_" . $fileName;
        if (move_uploaded_file($_FILES["path"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO data (nama, npm, file) 
                      VALUES ('$Nama', '$NPM', '$targetFile')";
            mysqli_query($conn, $query);

            echo "<div class='alert alert-success mt-3'>Data berhasil disimpan.</div>
                <script>
                    alert('Data Berhasil Ditambah');
                    window.location.href = 'index.php';
                </script>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Gagal mengupload file.</div>";
        }
   }
    ?>
</body>
</html>
