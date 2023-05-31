<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex007</title>
</head>
<body>
    <?php
    $numero = $_GET["numero"];
    echo "esse número é " . $numero . (($numero%3 == 0 && $numero%5 == 0)?" divisivel por 3 e 5":" não é divisivel por 3 e 5");

    // $numero = $_GET["numero"];
    // if($numero % 3 == 0 && $numero % 5 == 0){
    //     echo "esse numero é divisivel por 3 e 5";
    // }
    // else {
    //     echo "esse numero não é divisivel por 3 e 5";
    // }
    ?>
</body>
</html>