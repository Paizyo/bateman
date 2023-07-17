<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pembeli</h3>

                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">Nama Customer</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="Nama Customer">
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pesanan</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pesanan">
                    </div>
                    <div class="form-group">
                        <label for="idPasien">Harga</label>
                        <input type="text" class="form-control mb-3" name="harga" placeholder="Harga">
                    </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>