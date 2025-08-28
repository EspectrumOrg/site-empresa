<?php
include("../conexao/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Condição especial do admin
if ($nome == "admin" && $email == "eusoualenda@gmail.com" && $mensagem == "me manda um pix") {
    header("Location:../administrador/administrateur.php");
    exit();
}

// Salva no banco
$stmt = $pdo->prepare("INSERT INTO tbContato (nomeContato, emailContato, mensagemContato) VALUES(?, ?, ?)");
$stmt->execute([$nome, $email, $mensagem]);

// Envia email
$para = "espectrum.autismo@gmail.com";
$assunto = "Nova mensagem de contato de $nome";
$corpo = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";
$cabecalhos = "From: $email\r\nReply-To: $email\r\n";
mail($para, $assunto, $corpo, $cabecalhos);

// Redireciona com parâmetro de sucesso
header("Location:../index.php#contato?status=sucesso");
exit();
?>
