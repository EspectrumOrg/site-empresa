<?php
    include("../conexao/conexao.php");
    $idContato = $_GET['id'];
    
    $stmt = $pdo->prepare("DELETE FROM tbContato WHERE idContato='$idContato'");
    $stmt ->execute();
    header("Location:../administrador/administrateur.php");
?>