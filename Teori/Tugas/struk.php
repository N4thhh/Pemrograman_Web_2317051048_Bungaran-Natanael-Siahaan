<?php 
include "koneksi/db.php";
include "hitungDiskon.php"
include "prosedur.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Total Belanja</th>
            <th>Diskon</th>
            <th>Total Bayar</th>
        </tr>
        <tr>
            <td>
                <?php 
                $total=$_POST['total'];
                echo $total; ?>
            </td>
            <td>
                <?php
                $diskon = hitungDiskon($_POST['total']); 
                echo $diskon; ?>
            </td>
            <td>
                <?php 
                $totalbayar = $total - $diskon;
                echo $totalbayar; ?>
            </td>
        </tr>
    </table>

<?php simpanStruk($conn, $total, $diskon, $totalbayar); ?>


</body>
</html>