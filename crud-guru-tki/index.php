<?php
session_start();

if(!isset($_SESSION['login'])){
    header("location:login.php");
    exit;
}

include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM guru_tki");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Guru TKI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background-color:#F3F0FF;">
    <nav class="navbar navbar-expand-lg navbar-dark"
style="background-color:#8C00FF;">

<div class="container">

    <a class="navbar-brand fw-bold" href="#">

        🧪 TEKNIK KIMIA INDUSTRI

    </a>

    <a href="logout.php"
    class="btn btn-light">

        Logout

    </a>

</div>

</nav>

<div class="container mt-5">

    <h2 class="text-center fw-bold"
    style="color:#8C00FF;">
        BIODATA GURU TEKNIK KIMIA INDUSTRI
    </h2>

    <h4 class="text-center mb-4">
        SMKN 2 BALEENDAH
    </h4>

    <p class="text-center"
    style="color:#8C00FF;">

        🧪 Sistem Biodata Guru
        Teknik Kimia Industri 🧪
    </p>

    <a href="tambah.php"
    class="btn text-white mb-3"
    style="background-color:#8C00FF;">
        + Tambah Data
    </a>

   <div class="card shadow-lg p-4 border-0 rounded-4">

<table class="table text-center align-middle shadow-lg rounded-4 overflow-hidden"
style="
background-color:#F8F2FC;
border-radius:20px;
overflow:hidden;
">

    <tr
    style="
    background: linear-gradient(90deg,#D8B4E2,#8E7AB5);
    color:white;
    font-size:18px;
    letter-spacing:1px;
    ">

        <th style="padding:15px;">🧪 No</th>
        <th>📸 Foto</th>
        <th>👩‍🏫 Nama</th>
        <th>📚 Mata Pelajaran</th>
        <th>⚙️ Aksi</th>

    </tr>

<?php

$no = 1;

while($row = mysqli_fetch_array($data)){

?>

<tr style="background-color:#FDFBFF;">

    <td><?= $no++; ?></td>

    <td>

        <img
        src="uploads/<?= $row['foto']; ?>"
        width="80"
        class="rounded-circle shadow">

    </td>

    <td><?= $row['nama']; ?></td>

    <td><?= $row['mapel']; ?></td>

    <td>

        <a
        href="edit.php?id=<?= $row['id']; ?>"
        class="btn btn-warning btn-sm">

        Edit

        </a>

        <a
        href="hapus.php?id=<?= $row['id']; ?>"
        class="btn btn-danger btn-sm">

        Hapus

        </a>

    </td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>