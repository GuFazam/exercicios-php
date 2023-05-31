<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex006</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
<body>
    <form action="validar.php" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input placeholder="usuario@email.com" name="usuario" type="text" class="form-control" id="usuario">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input placeholder="Senha" name="senha" type="password" class="form-control" id="senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</body>
</html>