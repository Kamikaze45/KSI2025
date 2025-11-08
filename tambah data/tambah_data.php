<?php
require 'koneksi database/con_db.php';

// ambil input dan trim
$nama = trim($_POST['nama'] ?? '');
$npm  = trim($_POST['id']  ?? '');
$kelas= trim($_POST['kelas'] ?? '');

if ($nama === '' || $npm === '' || $kelas === '') {
    echo "<script>alert('Semua field wajib diisi.'); history.back();</script>";
    exit;
}

$sql = "INSERT INTO siswa (nama, npm, kelas) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $sql);

if (!$stmt) {
    echo "Gagal menyiapkan statement: " . mysqli_error($koneksi);
    exit;
}

mysqli_stmt_bind_param($stmt, "sss", $nama, $npm, $kelas);

if (mysqli_stmt_execute($stmt)) {
    header('Location: index.php?msg=success');
    exit;
} else {
    echo "Gagal menyimpan data: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
