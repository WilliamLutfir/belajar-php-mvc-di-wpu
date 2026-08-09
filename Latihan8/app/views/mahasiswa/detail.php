<div class="container mt-4">
    <div class="card border border-2 border-success" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mhs"]["nama"] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["mhs"]["nim"] ?></h6>
            <p class="card-text"><?= $data["mhs"]["email"] ?></p>
            <p class="card-text"><?= $data["mhs"]["jur"] ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-success btn-sm link-underline link-underline-opacity-0">« Kembali</a>
        </div>
    </div>
</div>