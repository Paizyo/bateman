<?php
$koneksi = new mysqli('localhost', 'root', '', 'kopi')
    or die(mysqli_error($koneksi));


if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $harga = $_POST['harga'];

    header("location:pasien.php");
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
}

if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $alamat = $_POST['alamat'];

    $koneksi->query("UPDATE pasien SET nmPasien = '$nmPasien' , alamat='$alamat' WHERE idPasien = '$idPasien'");
    header("location:pasien.php");
}
?>