<!DOCTYPE html>
<html>
<head>

    <title>Tambah Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Tambah Biodata Guru TKI</h2>

    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama" class="form-control">
        </div>

        

        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control">
        </div>

        

        

        <div class="mb-3">
            <label>Foto Guru</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>