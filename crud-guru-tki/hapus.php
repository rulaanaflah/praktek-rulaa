<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM guru_tki WHERE id='$id'"
);

$row = mysqli_fetch_assoc($data);

$foto = $row['foto'];

if(file_exists("uploads/$foto")){
    unlink("uploads/$foto");
}

mysqli_query(
    $conn,
    "DELETE FROM guru_tki WHERE id='$id'"
);

header("Location:index.php");

?>