<?php

include 'koneksi.php';

    $id = $_GET['id'];

        $data = mysqli_query(
        $conn,
"SELECT * FROM guru_tki WHERE id='$id'"
);

$row = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#F6F0FA;">

    <div class="container mt-5">

    <div class="card shadow-lg p-4 border-0 rounded-4">

    <h2
        class="text-center mb-4"
        style="color:#8E7AB5;">

Edit Biodata Guru TKI

    </h2>

<form
        action="proses_edit.php"
        method="POST"
        enctype="multipart/form-data">

<input
    type="hidden"
    name="id"
    value="<?= $row['id']; ?>">

<div class="mb-3">

<label>Nama Guru</label>

<input
    type="text"
    name="nama"
    class="form-control"
    value="<?= $row['nama']; ?>"
    required>

</div>

<div class="mb-3">

<label>Mata Pelajaran</label>

<input
    type="text"
    name="mapel"
    class="form-control"
    value="<?= $row['mapel']; ?>"
    required>

</div>

<div class="mb-3">

<label>Foto Baru</label>

<input
    type="file"
    name="foto"
    class="form-control">

</div>

<button
    type="submit"
    class="btn text-white"
    style="background-color:#8E7AB5;">

Update Data

</button>

    <a
        href="index.php"
        class="btn btn-secondary">

        Kembali

    </a>

        </form>

    </div>

    </div>

    </body>
</html>