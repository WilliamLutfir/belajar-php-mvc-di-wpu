<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman <?= $data['judul']; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous" defer></script>
    </head>
    <body style="text-align: justify;">
        <nav class="navbar navbar-expand-lg bg-success bg-gradient" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL; ?>">Aplikasi MVC William</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link<?php $halAktif=rtrim($_SERVER['REQUEST_URI'],'/'); $halAktif=explode('/',$halAktif); $halAktif=end($halAktif); if($halAktif==='public'){echo " active\" aria-current=\"page\"";}else{echo '"';} ?> href="<?= BASEURL; ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php $halAktif=rtrim($_SERVER['REQUEST_URI'],'/'); $halAktif=explode('/',$halAktif); $halAktif=end($halAktif); if($halAktif==='mahasiswa'){echo " active\" aria-current=\"page\"";}else{echo '"';} ?> href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?php $halAktif=rtrim($_SERVER['REQUEST_URI'],'/'); $halAktif=explode('/',$halAktif); $halAktif=end($halAktif); if($halAktif==='about'){echo " active\" aria-current=\"page\"";}else{echo '"';} ?> href="<?= BASEURL; ?>/about">Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
