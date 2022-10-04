<!doctype html>
<html>
<head>
    <title>SI Toko Perlengkapan Sekolah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pegawai</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/list_katalog">Katalog </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="p-3" ><?= esc($title) ?></h1>