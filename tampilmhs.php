<?php
include 'koneksi.php';
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="resource/Gameslipy icon.png" type="image/x-icon">
    <title>Data Mahasiswa</title>
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <div class="mt-4 mb-4 mr-4">
            <form action="index.html">
                <button action="index.html" type="submit" class="btn btn-outline-dark">Tambah Data</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Gender</th>
                    <th>Program Studi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $data["nrp"]; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["tglLahir"]; ?></td>
                        <td><?php echo $data["gender"]; ?></td>
                        <td><?php echo $data["prodi"]; ?></td>
                        <td>
                            <a class="btn btn-outline-primary" href="viewEdit.php?nrp=<?php echo $data['nrp']; ?>" role="button">Edit</a>
                            <a class="btn btn-outline-danger" href="hapus.php?nrp=<?php echo $data['nrp']; ?>" onclick="return confirm('Data ini akan dihapus?')" role="button">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script>js/bootstrap.js</script>
</body>

</html>