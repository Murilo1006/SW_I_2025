<?php
if (isset($_POST['linhas']) && isset($_POST['colunas'])) {
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];

    echo "<h3>Tabela $linhas x $colunas</h3>";
    echo "<table>";

    $i = 1;
    while ($i <= $linhas) {
        echo "<tr>";
        $j = 1;
        while ($j <= $colunas) {
            echo "<td>L$i C$j</td>";
            $j++;
        }
        echo "</tr>";
        $i++;
    }

    echo "</table>";
}
?>
