<?php

include "crud.php";
include "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "_css.php"; ?>

</head>

<body>

    <div class="container">
        <h3 class="mt-5 text-center">My Profile</h3>
        <hr>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nis">Username/NIS</label>
                    <input type="email" class="form-control" id="nis" name="nis" value="<?= $_SESSION['nis']; ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="nama">NAMA LENGKAP</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $_SESSION['nama']; ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputState">JENIS KELAMIN</label>
                    <select id="inputState" class="mb-3 form-control">
                        <option selected>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label for="tahun_masuk">TAHUN MASUK</label>
                <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?= $_SESSION['tahun_masuk']; ?>" readonly>
            </div>
            <div class=" form-group">
                <label for="kelas">KELAS</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $_SESSION['kelas']; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputZip">ALAMAT</label>
                    <input type="text" class="form-control" id="inputZip" value="<?= $_SESSION['alamat']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">TEMPAT LAHIR</label>
                    <input type="text" class="form-control" id="inputZip" value="<?= $_SESSION['tempat_lahir']; ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" id="inputZip" value="<?= $_SESSION['tanggal_lahir']; ?>">
                </div>
            </div>
            <button type="submit" class="btn  btn-primary">Simpan</button>
        </form>
    </div>

    <?php require_once "_js.php" ?>
</body>

</html>