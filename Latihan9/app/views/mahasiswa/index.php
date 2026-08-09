<div class="container mt-3">
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Mahasiswa</button>
            <h1 class="mt-2">Daftar Mahasiswa</h1>
            <ul class="list-group border border-2 border-success">
            <?php $keys = array_keys($data["mhs"]);
                $lastKey = end($keys);
            ?>
            <?php foreach($data["mhs"] as $key => $mhs) : ?>
                <li class="d-flex align-items-center list-group-item border border-2 border-success border-top-0 border-start-0 border-end-0<?php if($key===$lastKey){echo " border-bottom-0";} ?>">
                    <?= $mhs["nama"]; ?> 
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="btn btn-success btn-sm link-underline link-underline-opacity-0 ms-auto">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Mahasiswa</h1>
            </div>
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                <div class="modal-body bg-success bg-gradient">
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label text-white">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="jur" class="form-label text-white">Jurusan</label>
                        <select class="form-select" id="jur" name="jur" required>
                            <option value="" disabled selected hidden>Jurusan</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>