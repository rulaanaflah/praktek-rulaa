<?php

include 'koneksi.php';

$nama   = $_POST['nama'];

$mapel  = $_POST['mapel'];



$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, 'uploads/' . $foto);

mysqli_query($conn,

"INSERT INTO guru_tki
VALUES(
'',
'$nama',

'$mapel',


'$foto'
)"

);

header("Location:index.php");

?>