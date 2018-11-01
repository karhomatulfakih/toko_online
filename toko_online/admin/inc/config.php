<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "toko_online";
    
    $connect = mysql_connect($host, $user, $pass) or die ("Koneksi database gagal!");
    
    $select_db = mysql_select_db($db, $connect) or die ("Database $db tidak ditemukan!");
    
?>
