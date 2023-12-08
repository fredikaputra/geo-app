<?php require_once '../layout/app-head.php'; ?>

<?php

$query = 'SELECT * FROM tb_user WHERE id = ' . $_GET['id'];
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);

?>

<div class="container mt-5">
    <?php
        if (isset($_SESSION['success_update'])) {
            ?>
            <div class="alert alert-success" role="alert">
                User berhasil diubah!
            </div>
            <?php
            unset($_SESSION['success_update']);
        }
    ?>
    <form method="post" action="/proses/edit/user.php" class="row g-3 needs-validation" novalidate>
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <div class="col-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" value="<?= $user['nim'] ?>" name="nim" required>
            <div class="invalid-feedback">
                Isi NIM
            </div>
        </div>
        <div class="col-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" value="<?= $user['nama'] ?>" name="nama" required>
            <div class="invalid-feedback">
                Isi Nama
            </div>
        </div>
        <div class="col-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" value="<?= $user['prodi'] ?>" name="prodi" required>
            <div class="invalid-feedback">
                Isi Prodi
            </div>
        </div>
        <div class="col-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" class="form-control" id="semester" value="<?= $user['semester'] ?>" name="semester" required>
            <div class="invalid-feedback">
                Isi Semester
            </div>
        </div>
        <div class="col-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="nomor_hp" value="<?= $user['nomor_hp'] ?>" name="nomor_hp" required>
            <div class="invalid-feedback">
                Isi Nomor HP
            </div>
        </div>
        <div class="col-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" value="<?= $user['email'] ?>" name="email" required>
            <div class="invalid-feedback">
                Isi Email
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

<script src="/form-validation.js"></script>

<?php require_once '../layout/app-foot.php'; ?>
