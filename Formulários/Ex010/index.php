<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex010</title>
</head>
<body>
<form method="POST" action="enviar.php">
        <label>Nome</label><br>
        <input type="text" name="nome" id="nome"><br><br>
        <label>Email</label><br>
        <input type="email" name="email" id="email"><br><br>
        <label>Mensagem</label><br>
        <textarea name="mensagem" id="mensagem" rows="5"></textarea><br><br>
        <button type="submit" value="enviar">enviar</button>
    </form>
</body>
</html>