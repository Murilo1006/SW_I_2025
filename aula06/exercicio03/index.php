<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .Eletrônicos { background-color:rgb(250, 67, 67); }
        .Roupas { background-color:rgb(69, 130, 252); }
        .Alimentos { background-color:rgb(253, 245, 88); }
    </style>
</head>
<body>

<h2>Lista de Produtos</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Categoria</th>
    </tr>

    <?php
    $produtos = [
        ["nome" => "Iphone", "preco" => 3500, "categoria" => "Eletrônicos"],
        ["nome" => "Short", "preco" => 50, "categoria" => "Roupas"],
        ["nome" => "Carne", "preco" => 25, "categoria" => "Alimentos"],
        ["nome" => "Fone de Ouvido", "preco" => 120, "categoria" => "Eletrônicos"],
        ["nome" => "Boné", "preco" => 120, "categoria" => "Roupas"],
        ["nome" => "Bolacha", "preco" => 15, "categoria" => "Alimentos"]
    ];

    foreach ($produtos as $produto) {
        $classe = $produto['categoria'];
        echo "<tr class='{$classe}'>";
        echo "<td>{$produto['nome']}</td>";
        echo "<td>R$ {$produto['preco']}</td>";
        echo "<td>{$produto['categoria']}</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
