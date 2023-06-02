<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex004</title>
</head>
<body>
    <form method="post">
        <label>Digite um número</label>
        <input type="number" name="numero"><br>
        <button type="submit">tabuada</button>
    </form>

    <?php
    $numero = $_POST["numero"];
    for ($i = 0; $i <= 10; $i++) {
        echo "$numero X $i = " . $i * $numero . "<br>";
    }
    ?>
</body>
</html>