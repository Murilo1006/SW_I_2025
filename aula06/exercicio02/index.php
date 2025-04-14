<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Dinâmica</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Defina Tamanho da Tabela</h2>
<form action="processa02.php" method="POST">
    Linhas: <input type="number" name="linhas" min="1" required>
    Colunas: <input type="number" name="colunas" min="1" required>
    <button type="submit">Gerar Tabela</button>
</form>
</body>
</html>
