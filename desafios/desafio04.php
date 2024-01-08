<?php
//Desafio do IMC = peso/(altura x altura)
echo "CALCULO IMC" . PHP_EOL;
$imc;
$peso = 60;
$altura = 1.90;

$imc = 60 / ($altura * $altura);
echo "Seu imc é de $imc e está ";
if ($imc > 24.5) {
    echo "acima";
} else if ($imc < 18.5) {
    echo "abaixo";
} else {
    echo "dentro";
}
echo " do recomendado";
