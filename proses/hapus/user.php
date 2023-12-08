<?php

require_once '../../utils/connection.php';
session_start();

$query = $connection->prepare('DELETE FROM tb_user WHERE id = ?');
$query->bind_param('i', $_POST['id']);
$query->execute();
$connection->close();

$_SESSION['success_delete'] = true;

header('Location: /list/user.php');
die();
