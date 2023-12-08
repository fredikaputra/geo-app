<?php

require_once '../utils/connection.php';
session_start();

$query = $connection->prepare('SELECT * FROM tb_user WHERE nim = ?');
$query->bind_param('s', $_POST['nim']);
$query->execute();

$user = $query->get_result()->fetch_assoc();
$connection->close();

if (password_verify($_POST['password'], $user['password'])) {
    $_SESSION['login_id'] = uniqid();
    $location = 'Location: /list/user.php';
} else {
    $_SESSION['login_error'] = true;
    $location = 'Location: /login.php';
}

header($location);
die();
