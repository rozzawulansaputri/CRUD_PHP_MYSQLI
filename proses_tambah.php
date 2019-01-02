<?php
include 'koneksi.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($conn,"INSERT INTO mahasiswa(id, npm, nama, alamat, telp, jurusan) VALUES(0,'$npm','$nama','$alamat','$telp','$jurusan')") or die(mysqli_error($conn));

if ($query) {
    # code...
    echo "<script>alert('Data Berhasil Ditambah');
        window.location='index.php';</script>";
}else {
    echo "<script>alert('Data Gagal !!!');</script>";
}
?>