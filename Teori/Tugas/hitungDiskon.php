<?php
include "koneksi/db.php";
function hitungDiskon($total) {
    if ($total >= 100000) {
        return $total * 0.10;
    } elseif ($total >= 50000) {
        return $total * 0.05;
    } else {
        return 0;
    }
}