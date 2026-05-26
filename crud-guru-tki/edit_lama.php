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

    <div class="card shadow-lg border-0 rounded-4">

        <div 
            class="card-header text-white rounded-top-4"
            style="background-color:#8C00FF;"
        >
            <h3 class="mb-0 text-center">
                Edit Biodata Guru TKI
            </h3>
        </div>

        <div class="card-body p-4">

            <form
                action="proses_edit.php"
                method="POST"
                enctype="multipart/form-data"
            >

                <input
                    type="hidden"
                    name="id"
                    value="<?= $row['id']; ?>"
                >

                <div class="mb-3">

                    <label class="form-label">
                        Nama Guru
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="<?= $row['nama']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        NIP
                    </label>

                    <input
                        type="text"
                        name="nip"
                        class="form-control"
                        value="<?= $row['nip']; ?>"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Mata Pelajaran
                    </label>

                    <input
                        type="text"
                        name="mapel"
                        class="form-control"
                        value="<?= $row['mapel']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Alamat
                    </label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="3"
                    ><?= $row['alamat']; ?></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        No HP
                    </label>

                    <input
                        type="text"
                        name="no_hp"
                        class="form-control"
                        value="<?= $row['no_hp']; ?>"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Foto Lama
                    </label>

                    <br>

                    <img
                        src="uploads/<?= $row['foto']; ?>"
                        width="120"
                        class="rounded shadow-sm mb-2"
                    >

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Foto Baru
                    </label>

                    <input
                        type="file"
                        name="foto"
                        class="form-control"
                    >

                </div>

                <button
                    type="submit"
                    class="btn text-white"
                    style="background-color:#8C00FF;"
                >
                    Update Data
                </button>

                <a
                    href="index.php"
                    class="btn btn-secondary"
                >
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>