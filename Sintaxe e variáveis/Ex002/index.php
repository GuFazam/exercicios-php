<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex002</title>
</head>
<body>
    <?php
    $idade = "18";
    echo "se você tem " . $idade . (($idade>=18 && $idade<18)?" você é maior de idade":" você é menor de idade"); //operador unario

    // $idade = $_GET["idade"];
    // echo "se você tem " . $idade . (($idade>=18 && $idade<18)?" você é maior de idade":" você é menor de idade");
    ?>
</body>
</html>