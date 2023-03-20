<?php
    include 'koneksi.php';

    $nrp = $_GET['nrp'];

    $query = "delete from mahasiswa where nrp='$nrp'";

    mysqli_query($koneksi, $query);

    header("location:tampilmhs.php");
    die();
?>