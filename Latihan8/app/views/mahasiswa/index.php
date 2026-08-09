<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1>Daftar Mahasiswa</h1>
            <ul class="list-group border border-2 border-success border-top-0 border-start-0 border-end-0">   
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="d-flex list-group-item align-items-center border border-2 border-success border-bottom-0">
                    <?= $mhs["nama"]; ?> 
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="btn btn-success btn-sm link-underline link-underline-opacity-0 ms-auto">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>