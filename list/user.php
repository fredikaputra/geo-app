<?php require_once '../layout/app-head.php'; ?>

<?php

$query = 'SELECT * FROM tb_user';
$result = mysqli_query($connection, $query);

?>

<div class="container mt-5">
    <?php
        if (isset($_SESSION['success_create'])) {
            ?>
            <div class="alert alert-success" role="alert">
                User berhasil tambah!
            </div>
            <?php
            unset($_SESSION['success_create']);
        }
    ?>
    <?php
        if (isset($_SESSION['success_delete'])) {
            ?>
            <div class="alert alert-success" role="alert">
                User berhasil dihapus!
            </div>
            <?php
            unset($_SESSION['success_delete']);
        }
    ?>
    <a href="/tambah/user.php" class="btn btn-primary">Tambah user</a>
    <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">NAMA</th>
            <th scope="col">PRODI</th>
            <th scope="col">SEMESTER</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOMOR HP</th>
            <th scope="col">HAK AKSES</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;

                    while ($user = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $user['nim'] ?></td>
                                <td><?= $user['nama'] ?></td>
                                <td><?= $user['prodi'] ?></td>
                                <td><?= $user['semester'] ?></td>
                                <td><?= $user['nomor_hp'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <?php
                                    if ($user['level'] == 1) {
                                        ?>
                                            <td>Admin</td>
                                        <?php
                                    } else {
                                        ?>
                                            <td>Anggota</td>
                                        <?php
                                    }
                                ?>
                                <td>
                                    <div class="d-flex gap-1" aria-label="Basic example">
                                        <a href="/edit/user.php?id=<?= $user['id'] ?>" class="btn btn-warning">Edit</a>
                                        <form action="/proses/hapus/user.php" method="post">
                                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                            <button type="submit" onclick="return confirm('Yakin hapus user ini?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php
                    }
                } else {
                    echo '0 results';
                }
            ?>
        </tbody>
    </table>
</div>

<?php require_once '../layout/app-foot.php'; ?>
