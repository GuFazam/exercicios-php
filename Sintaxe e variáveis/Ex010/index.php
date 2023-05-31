<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex010</title>
</head>
<body>
    <form>
        <label>Digite sua idade</label>
        <input type="number" name="idade">
        <button type="submit">Verificar</button>
    </form>
    <?php
    $idade = $_GET["idade"];
    echo "você " . (($idade>16 || $idade==16)?"tem direito a voto":"não tem direito a voto");
    ?>
</body>
</html>