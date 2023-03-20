<?php
    include "koneksi.php";

    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $tglLahir = $_POST['tglLahir'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE mahasiswa set nama='$nama',
    tglLahir='$tglLahir',
    gender='$gender',
    prodi='$prodi'
    where nrp='$nrp'";

    mysqli_query($koneksi, $query);
    echo "Error : " . mysqli_error($koneksi);

    header("location:tampilMhs.php");
    die();
