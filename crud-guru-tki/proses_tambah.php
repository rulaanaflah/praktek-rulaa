<?php

include 'koneksi.php';

$nama   = $_POST['nama'];
$nip    = $_POST['nip'];
$mapel  = $_POST['mapel'];
$alamat = $_POST['alamat'];
$no_hp  = $_POST['no_hp'];

$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, 'uploads/' . $foto);

mysqli_query($conn, "

INSERT INTO guru_tki
(nama, nip, mapel, alamat, no_hp, foto)

VALUES
('$nama', '$nip', '$mapel', '$alamat', '$no_hp', '$foto')

");

header("Location:index.php");

?>