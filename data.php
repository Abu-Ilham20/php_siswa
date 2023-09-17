<?php
include "crud.php";

if (!isset($_SESSION["nis"])) {
    header("location: login.php");
    exit;
}
include "db.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Siswa</title>
    <?php require_once "_css.php" ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="">
    <?php include "navbar.php" ?>
    <?php require_once "header.php" ?>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <?php
            if (isset($_SESSION['silau'])) {
                $message = $_SESSION['silau'];
                unset($_SESSION['silau']);
                echo $message;
            }
            if (isset($_SESSION['sulap'])) {
                $message = $_SESSION['sulap'];
                unset($_SESSION['sulap']);
                echo $message;
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h5>Data Siswa SMKN 2 Kra</h5>
                    <span class="d-block m-t-5">berikut adalah data siswa smkn 2 karanganyar</span>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-info">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Tahun Masuk</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0 ?>
                                <?php foreach ($dataUser as $siswa) { ?>
                                    <?php $no++; ?>
                                    <tr>
                                        <td scope="row"><?= $no; ?></td>
                                        <td><?= $siswa['nis']; ?></td>
                                        <td><?= $siswa['nama']; ?></td>
                                        <td><?= $siswa['tahun_masuk']; ?></td>
                                        <td><?= $siswa['kelas']; ?></td>
                                        <td><?= $siswa['alamat']; ?></td>
                                        <td><?= $siswa['tempat_lahir']; ?></td>
                                        <td><?= $siswa['tanggal_lahir']; ?></td>
                                        <td>
                                            <?php include "modal_edit.php"; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php require_once "_js.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>s