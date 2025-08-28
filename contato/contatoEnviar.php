<?php
include("../conexao/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// Condição especial do admin
if ($nome == "admin" && $email == "admin@gmail.com" && $assunto == "acesso" && $mensagem == "6~5~5y9%Rfq") {
    header("Location:../administrador/administrateur.php");
    exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carrega o autoload do Composer
require __DIR__ . "/../vendor/autoload.php";

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'espectrum.autismo@gmail.com';
    $mail->Password   = 'emgytarvgjouvchl';  // senha de app gerada
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Remetente e destinatário
    $mail->setFrom($email, $nome);
    $mail->addAddress('espectrum.autismo@gmail.com', 'Espectrum');

    // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body    = $mensagem;

    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
}



// Salva no banco
$stmt = $pdo->prepare("INSERT INTO tbContato (nomeContato, emailContato, assuntoContato, mensagemContato) VALUES(?, ?, ?, ?)");
$stmt->execute([$nome, $email, $assunto, $mensagem]);

// Redireciona com parâmetro de sucesso
header("Location:../index.php#contato?status=sucesso");
exit();
