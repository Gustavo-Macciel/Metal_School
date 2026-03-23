<?php

$host = "mysql";
$user = "root";
$pass = "dev";
$bd = "escola_metal";

$mysqli = new mysqli($host, $user, $pass, $bd);

if ($mysqli->connect_errno) {
    die("Erro de conexão: " . $mysqli->connect_error);
}
