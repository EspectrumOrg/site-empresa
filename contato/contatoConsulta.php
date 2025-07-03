<?php include("../conexao/conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrador</title>
</head>

<body>
    <form action="contatoAlterar.php" method="post" enctype="multipart/form-data">
        <h1>Contato</h1>
        <div class="textfield">
            <input type="hidden" name="idContato" value="<?php echo @$_GET['id']; ?>" />
        </div>

        <div class="textfield">
            <input type="text" name="nomeContato" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome" />
        </div>

        <div class="textfield">
            <input type="text" name="emailContato" value="<?php echo @$_GET['email']; ?>" placeholder="E-mail" />
        </div>

        <div class="textfield">
            <input type="text" name="mensagemContato" value="<?php echo @$_GET['mensagem']; ?>" placeholder="Mensagem" />
        </div>

        <div class="textfield">
            <input type="submit" value="Salvar" />
        </div>
    </form>
</body>

</html>