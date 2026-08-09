<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1>Daftar Mahasiswa</h1>   
            <?php foreach($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nim']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jur']; ?></li>
                </ul>
                <hr class="border border-success border-2 opacity-100">
            <?php endforeach; ?>
        </div>
    </div>
</div>