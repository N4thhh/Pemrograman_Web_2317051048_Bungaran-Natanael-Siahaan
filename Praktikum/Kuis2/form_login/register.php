<?php
include "../koneksi/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label>
        <input type="password" name="password" placeholder="Password">
    </label>
    <button type="submit" name="register">Register</button>
</form>
<button><a href="index.php">Login</a></button>

    <?php
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (username, pw) VALUES ('$username', '$password')";
        if(mysqli_query($conn, $query)){
            echo "Register Berhasil";
        }else{
            echo "Register Gagal";
        }
    }
    ?>
</body>
</html>
