<?php include('../conexao/conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espectrum</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div>
        <header class="header-administrador">
            <div class="container-administrador">
                <h1>Olá, Você está na área do administrador!</h1>
                <h3>Seja bem-vindo(a)!</h3>
                <a href="../index.php">Voltar para o site</a>
            </div>
        </header>

        <div class="container-apresentarcontato">
            <h1>Contatos</h1>
            <h2>Lista de contatos recebidos</h2>
            <h3>Você pode excluir ou alternar o status de cada contato.</h3>
            <?php
            $stmt = $pdo->prepare("SELECT * FROM tbContato");
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
                <div class="card-apresentarcontato">
                    <div class="titulo-card-contato">
                        <div class="card-contato">
                            <h2><?php echo $row["nomeContato"]; ?></h2> <!-- nome -->
                            <h2><?php echo $row["emailContato"]; ?></h2> <!-- nome -->
                            <h2><?php echo $row["mensagemContato"]; ?></h2> <!-- nome -->
                        </div>
                        <div class="botao-card-apresentarcontato"> <!-- botões -->
                            <a href="../contato/contatoConsulta.php?id=<?php echo $row[0] ?>&nome=<?php echo $row[1] ?>&email=<?php echo $row[2] ?>&mensagem=<?php echo $row[3] ?>"> botão alternar</a>
                            <a href="../contato/contatoExcluir.php?id=<?php echo $row[0]; ?>">botão excluir</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>