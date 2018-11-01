<?php

include('inc/config.php');
    
$nama       = $_POST['nama'];
$password   = $_POST['password'];

$nama       = mysql_real_escape_string($nama);
$password   = mysql_real_escape_string($password);

$query = mysql_query("SELECT * FROM user WHERE nama = '$nama' AND password = '$password'");

if(mysql_num_rows($query) == 1) {
    echo "Anda berhasil login";
} else {
    echo "Anda gagal login";
}

if(mysql_num_rows($query) == 1) {
    session_start();
    
    $_SESSION['nama'] = $nama;
    $_SESSION['password'] = $password;

    header('location:index.php');
} else {
    header('location:login.php');
}


?>
