<!DOCTYPE html>
<html>
<head>

    <title>Tambah Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4 border-0 rounded-4">

    <h2 style="color: #8C00FF; text-align: center;">Tambah Biodata Guru TKI</h2>

    <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label>Nama Guru</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="nip" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <div class="mb-3">
            <label>Foto Guru</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button 
            type="submit" 
            class="btn text-white"
            style="background-color: #8C00FF;"
        >
            Simpan
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

</body>
</html>