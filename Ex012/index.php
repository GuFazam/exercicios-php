<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex012</title>
</head>
<body>
<form method="POST">
        <label>Digite sua idade</label>
        <input type="number" name="idade"><br>
        <label>Digite sua altura</label>
        <input type="number" name="altura">
        <button type="submit">Enviar</button>
    </form>

    <?php
    $idade = $_POST["idade"];
    $altura = $_POST["altura"];
    echo (($idade && $altura))?"você tem $idade e $altura":" Está falatando alguma informação tente novamente";
?>
</body>
</html>