<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Estilizada</title>
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
        .par {
            background-color:rgb(40, 126, 255);
        }
        .impar {
            background-color:rgb(132, 183, 249);
        }
    </style>
</head>
<body>

<h2>Tabela com Cores Alternadas</h2>
<table>
    <?php
    for ($i = 1; $i <= 8; $i++) {
        $classe = ($i % 2 == 0) ? 'par' : 'impar';
        echo "<tr class='$classe'>";
        for ($j = 1; $j <= 4; $j++) {
            echo "<td>Linha $i, Coluna $j</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
