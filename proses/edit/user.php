<?php

require_once '../../utils/connection.php';
session_start();

$query = $connection->prepare('UPDATE tb_user SET nim = ?, nama = ?, prodi = ?, semester = ?, nomor_hp = ?, email = ? WHERE id = ?');
$query->bind_param('sssissi',
    $_POST['nim'],
    $_POST['nama'],
    $_POST['prodi'],
    $_POST['semester'],
    $_POST['nomor_hp'],
    $_POST['email'],
    $_POST['id']
);
$query->execute();
$connection->close();

$_SESSION['success_update'] = true;

header('Location: /edit/user.php?id=' . $_POST['id']);
die();
