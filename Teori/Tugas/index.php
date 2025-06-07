<?php 
include "koneksi/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Diskon</title>
</head>
<body>
    <form action="struk.php" method="post">
        <label for="total">Total Belanja (Rp):</label>
        <input type="number" name="total" id="total" min="0" value="0" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>