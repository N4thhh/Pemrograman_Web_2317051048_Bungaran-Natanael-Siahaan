<?php
include "koneksi/db.php";
function simpanStruk($conn, $total, $diskon, $totalbayar) {
    $query = "INSERT INTO struk (totalbelanja, diskon, totalbayar) VALUES ($total, $diskon, $totalbayar)";
    mysqli_query($conn, $query);
}
?>