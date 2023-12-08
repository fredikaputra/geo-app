<?php

require_once '../../utils/connection.php';
session_start();

$query = $connection->prepare('INSERT INTO tb_user VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?)');
$query->bind_param('ssssssss',
    $_POST['nim'],
    $_POST['nama'],
    $_POST['prodi'],
    $_POST['semester'],
    $_POST['nomor_hp'],
    $_POST['email'],
    password_hash($_POST['password'], PASSWORD_BCRYPT),
    $_POST['level']
);
$query->execute();
$connection->close();

$_SESSION['success_create'] = true;

header('Location: /list/user.php?');
die();
