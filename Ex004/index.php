<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex004</title>
</head>
<body>
    <?php
    // $numero = "25";
    // echo "este numero é " . $numero . (($num/2 && $num/1)?" par":" impar"); //operador unario

    $numero = $_GET["num"];
    echo "este numero é " . $numero . (($num/2 && $num/1)?" par":" impar"); //operador unario
    ?>
</body>
</html>