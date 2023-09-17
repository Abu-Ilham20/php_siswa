<?php
session_start();
include "db.php";

$queryUser = "SELECT * FROM tb_siswa";
$execUser = mysqli_query($db, $queryUser);
$dataUser = mysqli_fetch_all($execUser, MYSQLI_ASSOC);

if (isset($_POST['kirim'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenkel'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $password = md5($_POST['password']);

    $querytambah = "INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama`, `jenis_kelamin`, `tahun_masuk`, `kelas`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `password`) VALUES (NULL, '$nis', '$nama' , '$jenis_kelamin', '$tahun_masuk', '$kelas', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$password')";
    $exectambah = mysqli_query($db, $querytambah);
    if ($exectambah) {
        $_SESSION["flash"] = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        Data Berhasil Ditambahkan
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
    </div>";
        header("location: input.php");
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id_siswa'];
    $nis = $_POST['editnis'];
    $nama = $_POST['editnama'];
    $jenkel = $_POST['editjenkel'];
    $thn_msk = $_POST['editthn'];
    $kelas = $_POST['editkls'];
    $alamat = $_POST['editalmt'];
    $tmpt_lahir = $_POST['edittmpt'];
    $tanggal_lahir = $_POST['edittgl'];
    $password = $_POST['editpass'];
    $queryEdit = "UPDATE `tb_siswa` SET `nis` = '$nis', `nama` = '$nama', `jenis_kelamin` = '$jenkel', `tahun_masuk` = '$thn_msk', `kelas` = '$kelas', `alamat` = '$alamat', `tempat_lahir` = '$tmpt_lahir', `tanggal_lahir` = '$tanggal_lahir', `password` = '$password' WHERE `id_siswa` = $id";
    $execEdit = mysqli_query($db, $queryEdit);
    if ($execEdit) {
        $_SESSION["silau"] = "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        Data Berhasil Di ubah!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
    </div>";
        header("location: data.php");
    }
}


if (isset($_GET['delete'])) {
    $id = $_GET['idhapus'];
    $querryDelete = "DELETE FROM `tb_siswa` WHERE id_siswa = $id";
    $execDelete = mysqli_query($db, $querryDelete);
    if ($execDelete) {
        $_SESSION["sulap"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Data Berhasil Di Hapus!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
    </div>";
        header("location: data.php");
    }
}

//login dri papip
if (isset($_POST['login'])) {
    $nis = $_POST['nis'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
    $hasil = mysqli_query($db, $query);
    $siswa = mysqli_fetch_array($hasil);

    if ($password == $siswa['password']) {
        session_start();
        $_SESSION['nis'] = $siswa['nis'];
        $_SESSION['nama'] = $siswa['nama'];
        $_SESSION['jenis_kelamin'] = $siswa['jenis_kelamin'];
        $_SESSION['tahun_masuk'] = $siswa['tahun_masuk'];
        $_SESSION['kelas'] = $siswa['kelas'];
        $_SESSION['alamat'] = $siswa['alamat'];
        $_SESSION['tempat_lahir'] = $siswa['tempat_lahir'];
        $_SESSION['tanggal_lahir'] = $siswa['tanggal_lahir'];
        $_SESSION['password'] = $siswa['password'];
        header("Location: index.php");
    } else {
        session_start();
        $_SESSION["flash"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        NIS/PASSWORD salahhh!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
    </div>";
        header("location: login.php");
    }
}


// // Login
// if (isset($_POST['login'])) {
//     $nis = $_POST['nis'];
//     $password = $_POST['password'];
//     $queryAmbil = "SELECT * FROM tb_siswa WHERE nis = '$nis'";
//     $execAmbil = mysqli_query($db, $queryAmbil);
//     if (mysqli_num_rows($execAmbil) == 1) {
//         $dataLogin = mysqli_fetch_assoc($execAmbil);
//         $hashed = $dataLogin['password'];
//         if (password_verify($password, $hashed)) {
//             $_SESSION['login'] = true;
//             header("location:index.php");
//             exit;
//         } else {
//             $_SESSION['flash'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
//         <i class='fa fa-exclamation-circle me-2'></i>Password Salah
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//     </div>";
//             $_SESSION['username'] = $nis;
//             header("location: login.php");
//             exit;
//         }
//     } else {
//         $_SESSION['flash'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
//         <i class='fa fa-exclamation-circle me-2'></i>NIS Tidak Terdaftar
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//     </div>";
//         header("location: login.php");
//         exit;
//     }
// }

// if (isset($_SESSION['nis'])) {
//     $nis = $_SESSION['nis'];
//     $queryUser = "SELECT * FROM tb_siswa where nis = $nis";
//     $execUser = mysqli_query($db, $queryUser);
//     $dataUser = mysqli_fetch_assoc($execUsers);
// }
