<?php
require 'koneksi database/con_db.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h3>Tambah Data (id, nama, npm, kelas)</h3>
    <div class="card p-4 shadow-sm mt-3">
        <form action="tambah data/tambah_data.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required maxlength="100" placeholder="Masukkan nama">
            </div>

            <div class="mb-3">
                <label class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" required maxlength="30" placeholder="Masukkan NPM">
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" required maxlength="50" placeholder="Masukkan kelas">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>

