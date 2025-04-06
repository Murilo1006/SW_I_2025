<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style02.css">
</head>
<body>

    <header>
        Seja Bem-Vindo!
    </header>

    <div class="container">
        <form action="processa.php" method="POST">
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Endereço de Email</label>
                <input type="email" id="form1Example1" class="form-control" name="email" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Senha</label>
                <input type="password" id="form1Example2" class="form-control" name="senha" />
            </div>    

            <input type="submit" class="btn btn-primary btn-block mb-4" value="Enviar">
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>