<?php
include '../koneksi/db.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND pw='$password'";
if(mysqli_query($conn, $query)){
    echo "Login Berhasil";
    header('location:../index.php');
}else{
    echo "Login Gagal";
}
?>
