<?php

include 'koneksi.php';

$id    = $_POST['id'];
$nama  = $_POST['nama'];
$mapel = $_POST['mapel'];

$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

if($foto != ""){

    $dataLama = mysqli_query(
        $conn,
        "SELECT * FROM guru_tki WHERE id='$id'"
    );

    $row = mysqli_fetch_assoc($dataLama);

    $fotoLama = $row['foto'];

    if(file_exists("uploads/$fotoLama")){
        unlink("uploads/$fotoLama");
    }

    move_uploaded_file(
        $tmp,
        "uploads/".$foto
    );

    mysqli_query(
        $conn,
        "UPDATE guru_tki SET

        nama='$nama',
        mapel='$mapel',
        foto='$foto'

        WHERE id='$id'"
    );

}else{

    mysqli_query(
        $conn,
        "UPDATE guru_tki SET

        nama='$nama',
        mapel='$mapel'

        WHERE id='$id'"
    );

}

header("Location:index.php");

?>