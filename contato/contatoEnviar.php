<?php 
include("../conexao/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

if(($nome) == "admin" && ($email) == "eusoualenda@gmail.com" && ($mensagem) == "me manda um pix") {
    header("Location:../administrador/administrateur.php");
} else {
    $stmt = $pdo->prepare("INSERT INTO tbContato (nomeContato, emailContato, mensagemContato) VALUES(?, ?, ?)");
    $stmt->execute([$nome, $email, $mensagem]);
    header("Location:../index.php");
}

exit();
?>