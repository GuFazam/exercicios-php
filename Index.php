<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex001</title>
</head>
<body>
<form method="POST">
        <label>Digite seu nome</label>
        <input type="text" name="nome">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $nome = $_POST["nome"];
    echo "Olá, $nome!";
    ?>
</body>
</html>