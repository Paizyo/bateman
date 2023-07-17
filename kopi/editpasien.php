<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pemesan</h3>
                <?php

include 'koneksi.php';
$panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");

?>
                <?php
while ($row = $panggil->fetch_assoc()) {
?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">Nama Customer</label>

                        <input type="text" class="form-control mb-3" name="idPasien" value="<?= $row['idPasien'] ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pesanan</label>

                        <input type="text" class="form-control mb-3" name="nmPasien" value="<?= $row['nmPasien'] ?>">

                    </div>

                        <div class="form-group mt-3">
                            <label for="alamat">Harga</label>

                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Harga"><?= $row['alamat'] ?></textarea>
                        </div>

                        <div class="form-group mt-3">

                            <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>