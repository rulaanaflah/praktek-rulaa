<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin
WHERE username='$username'
AND password='$password'";

$query = mysqli_query($conn, $sql);

$cek = mysqli_num_rows($query);

if($cek > 0){

    $_SESSION['login'] = true;

    header("Location:dashboard.php");

}else{

    echo "
    <script>

    alert('Username atau Password Salah');

    window.location='index.php';

    </script>
    ";

}

?>