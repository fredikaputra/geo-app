<?php

$servername = 'mysql';
$database = 'pembukaan_rekening';
$username = 'sail';
$password = 'password';

try {
    $connection = new mysqli($servername, $username, $password, $database);
} catch (\Throwable $th) {
    $connection = null;
}
