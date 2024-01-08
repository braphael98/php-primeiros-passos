<?php
//Desafio sobre repetições em for e em while;
echo "Chamada - Turma 04" . PHP_EOL;
echo PHP_EOL;
for ($i = 1; $i <= 15; $i++) {
    if ($i == 13) {
        echo"# $i SAIU DA TURMA".PHP_EOL;
        continue;
    }
    echo "# $i" . PHP_EOL;
}



echo PHP_EOL;
echo "Agora em while" . PHP_EOL;
echo PHP_EOL;

$contador = 1;

while ($contador <= 15) {
    echo "#$contador" . PHP_EOL;
    $contador  = $contador + 1;
}
