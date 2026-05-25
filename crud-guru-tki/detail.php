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

    <title>Detail Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#F6F0FA;">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">

                <div 
                    class="card-header text-white text-center"
                    style="background-color:#8C00FF;"
                >

                    <h3 class="mb-0">
                        Profile Guru TKI
                    </h3>

                </div>

                <div class="card-body text-center p-4">

                    <img
                        src="uploads/<?= $row['foto']; ?>"
                        width="180"
                        height="180"
                        class="rounded-circle shadow mb-4"
                        style="object-fit:cover;"
                    >

                    <h3 style="color:#8C00FF;">
                        <?= $row['nama']; ?>
                    </h3>

                    <hr>

                    <div class="text-start">

                        <p>
                            <strong>NIP :</strong>
                            <?= $row['nip']; ?>
                        </p>

                        <p>
                            <strong>Mata Pelajaran :</strong>
                            <?= $row['mapel']; ?>
                        </p>

                        <p>
                            <strong>Alamat :</strong>
                            <?= $row['alamat']; ?>
                        </p>

                        <p>
                            <strong>No HP :</strong>
                            <?= $row['no_hp']; ?>
                        </p>

                    </div>

                    <a
                        href="index.php"
                        class="btn text-white mt-3"
                        style="background-color:#8C00FF;"
                    >
                        Kembali
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>