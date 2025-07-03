<?php  
    include("../conexao/conexao.php");
    $id = $_POST['idContato'];
    $nome = $_POST['nomeContato'];
    $email = $_POST['emailContato'];
    $mensagem = $_POST['mensagemContato'];

    $stmt = $pdo->prepare("
        UPDATE tbContato SET
            nomeContato='$nome',
            emailContato='$email',
            mensagemContato='$mensagem'
            WHERE idContato ='$id';
    ");	    
	$stmt ->execute();    

    header("location:../administrador/administrateur.php"); 
?>