<?php
include 'koneksi.php';

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$tglLahir = $_POST['tglLahir'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];

$query = "insert into mahasiswa values('$nrp','$nama','$tglLahir','$gender','$prodi')";
mysqli_query($koneksi,$query);

header("location:tampilmhs.php");
die();
?>