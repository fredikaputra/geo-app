<?php require_once '../layout/app-head.php'; ?>

<div class="container mt-5">
    <form method="post" action="/proses/tambah/user.php" class="row g-3 needs-validation" novalidate>
        <div class="col-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
            <div class="invalid-feedback">
                Isi NIM
            </div>
        </div>
        <div class="col-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
            <div class="invalid-feedback">
                Isi Nama
            </div>
        </div>
        <div class="col-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
            <div class="invalid-feedback">
                Isi Prodi
            </div>
        </div>
        <div class="col-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" class="form-control" id="semester" name="semester" required>
            <div class="invalid-feedback">
                Isi Semester
            </div>
        </div>
        <div class="col-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required>
            <div class="invalid-feedback">
                Isi Nomor HP
            </div>
        </div>
        <div class="col-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">
                Isi Email
            </div>
        </div>
        <div class="col-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div class="invalid-feedback">
                Isi Password
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Tambah</button>
        </div>
    </form>
</div>

<script src="/form-validation.js"></script>

<?php require_once '../layout/app-foot.php'; ?>
