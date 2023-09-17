<?php
session_start();

if (!isset($_SESSION["nis"])) {
    header("location: login.php");
    exit;
}
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>From Input Data Siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <?php include "_css.php"; ?>



</head>

<body class="">
    <?php include "navbar.php" ?>
    <?php require_once "header.php" ?>



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <?php
            if (isset($_SESSION['flash'])) {
                $message = $_SESSION['flash'];
                unset($_SESSION['flash']);
                echo $message;
            }
            ?>
            <!-- [ breadcrumb ] start -->
            <h5 class="mt-5">Form Tambah Data Siswa</h5>
            <hr>
            <form action="crud.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS anda" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Tuliskan Nama Anda">
                    </div>
                    <div class="col-md-6">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenkel" class="mb-3 form-control">
                            <option value="l" selected>Laki-laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" placeholder="Tahun Masuk Sekolah">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas Anda">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Tuliskan Alamat Anda">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Tulis Tempat Lahir Anda">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Check me out</label>
                    </div>
                </div>
                <button type="submit" class="btn  btn-primary" name="kirim">Kirim</button>
            </form>

            <!-- js -->
            <?php require_once "_js.php" ?>
</body>

</html>