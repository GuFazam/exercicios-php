<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex008</title>
</head>
<body>
    <form method="post">
        <h3>Digite suas notas:</h3><br>
        <label>Portugês</label>
        <input type="number" name="nota1"><br>
        <label>Matemática</label>
        <input type="number" name="nota2"><br>
        <label>Quimica</label>
        <input type="number" name="nota3"><br>
        <button type="submit">Calcular</button>
    </form>
    <?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "sua média é $media";
    ?>
</body>
</html>