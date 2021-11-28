<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Tk Taruna Bahari</title>
</head>

<body>


    <!-- navbar -->
    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?= base_url('home'); ?>">Profile Sekolah</a>
            </li>
            <li>
                <a href="<?= base_url('kegiatan'); ?>">Keg.Pembelajaran</a>
            </li>
            <li>
                <a href="<?= base_url('guru'); ?>">Data Guru</a>
            </li>
            <li>
                <a href="<?= base_url('galeri'); ?>">Galeri</a>
            </li>
            <li>
                <a href="<?= base_url('pendaftaran'); ?>"> Pendaftaran</a>
            </li>
            <li><a href="<?= base_url('login'); ?>"><button id="login" class="btn btn-radius btn-warning">Login</button></a></li>
        </ul>
    </div>

    <!-- sidebar end -->

    <header>
        <div class="container">
            <h1><a href="<?= base_url('home'); ?>">TK TARUNA BAHARI</a></h1>
            <ul>
                <li><a href="<?= base_url('home'); ?>">Profile Sekolah</a></li>
                <li><a href="<?= base_url('kegiatan'); ?>">Keg Pembelajaran</a></li>
                <li><a href="<?= base_url('guru'); ?>">Data Guru</a></li>
                <li><a href="<?= base_url('galeri'); ?>">Galeri</a></li>
                <li><a href="<?= base_url('pendaftaran'); ?>">Pendaftaran</a></li>
                <li><a href="<?= base_url('login'); ?>"><button id="login" class="btn btn-radius btn-warning">Login</button></a></li>
            </ul>
            <!-- mobile menu first -->
            <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x" style="color: white;"></i></label>
            <!-- mobile menu end -->
        </div>
    </header>
    <!-- navbar end -->