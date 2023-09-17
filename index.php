<?php
include "db.php";
session_start();

if (!isset($_SESSION["nis"])) {
    header("location: login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Absensi SMKN 2 Kra</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <?php include "_css.php"; ?>
    <style>
        button {
            background-color: #205295;
            color: white;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            border-radius: 25px;
            font-size: 16px;
            margin: 4px 2px;
        }
    </style>



</head>

<body class="">
    <?php include "navbar.php" ?>
    <?php require_once "header.php" ?>



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <div class="col-sm-12 mb-3">
                            <h5 class="mb-3">Halaman Utama </h5>
                            <hr>
                            <a class="btn mb-1 btn-primary collapsed" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="border-radius: 25px;">Visi Dan Misi SMKN 2 Karanganyar</a>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="multi-collapse mt-2 collapse" id="multiCollapseExample1">
                                        <div class="card">
                                            <div class="card-body">
                                                <b>
                                                    <p class="mb-0">Visi</p>
                                                </b>
                                                <p>Berkarakter, Berprestasi dan Berbudaya Lingkungan.</p>

                                                <b>
                                                    <p class="strong">Misi</p>
                                                </b>
                                                <p>1. Menanamkan Keimanan dan Ketakwaan kepada Tuhan Yang Maha Esa</p>
                                                <p>2. Menyelenggarakan Pendidikan dan Pelatihan yang Berkualitas dan Berbudaya Lingkungan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- js -->
        <?php require_once "_js.php" ?>
</body>

</html>