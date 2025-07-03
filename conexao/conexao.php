<?php 
$servidor = "localhost";
$database = "bdEspectrum";
$usuario = "root";
$senha = "";

$mysql = new mysqli($servidor, $usuario, $senha, $database);
    if ($mysql->error) {
        die("Falha ao conectar ao banco de dados: " . $mysql->error);
    } else {
        $pdo = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }?>