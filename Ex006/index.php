<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex006</title>
</head>
<body>
    <?php
    $valor = $_GET['valor'];

if ($valor > 0) {
    echo "O valor é positivo.";
} elseif ($valor < 0) {
    echo "O valor é negativo.";
} else {
    echo "O valor é zero.";
}
    ?>
</body>
</html>