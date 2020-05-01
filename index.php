<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>

<body>
    <form enctype="multipart/form-data" action="dados.php" method="POST">
        <input type="file" name="arquivo"><br><br>
        <button name="Enviar" type="submit">Enviar</button>
    </form>
</body>

</html>