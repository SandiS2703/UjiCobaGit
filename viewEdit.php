<?php
include 'koneksi.php';

$nrp = $_GET['nrp'];

$query = "SELECT * FROM mahasiswa WHERE nrp = '$nrp'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Edit Data Mahasiswa</title>
    <link rel="icon" href="resource/Gameslipy icon.png" type="image/x-icon">
</head>

<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container">
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <form action="actionEdit.php" method="post" class="row g-3">
            <h1>Form Mahasiswa</h1>
            <div class="mb-3">
                <label for="nrp" class="form-label">NRP</label>
                <div class="col-sm-6">
                <input type="text" name="nrp" id='nrp' class="form-control" value="<?php echo $row['nrp'];?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <div class="col-sm-6">
                <input type="text" name="nama" id='nama' class="form-control" value="<?php echo $row['nama'];?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                <div class="col-sm-6">
                <input type="date" name="tglLahir" id='tglLahir' class="form-control" value="<?php echo $row['tglLahir'];?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                <input type="text" name="gender" id="gender" class="form-control" value="<?php echo $row['gender'];?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <div class="col-sm-6">
                <input type="text" name="prodi" id="prodi" class="form-control" value="<?php echo $row['prodi'];?>">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-dark">Simpan</button>
            </div>
        </form>
        <?php endwhile; ?>
    </div>
</body>

</html>