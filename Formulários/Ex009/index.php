<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex009</title>
</head>
<body>
    <form method="post">
        <label>Digite um número</label>
        <input type="number" name="numero"><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    $numero = $_POST["numero"];
    if ($numero % 2 == 0){
        echo "este numero é par";
    } else {
        echo "este numero é impar";
    } 
    ?>
</body>
</html>