<?php


$dados = [
    ['Nome', 'Idade', 'Cidade'],
    ['João', 30, 'Lisboa'],
    ['Maria', 25, 'Porto'],
    ['Pedro', 35, 'Coimbra']
];
echo "<table border='1'>";


foreach ($dados as $linha) {

    echo "<tr>";


    foreach ($linha as $elemento) {

        echo "<td>" . $elemento . "</td>";
    }


    echo "</tr>";
}


echo "</table>";

