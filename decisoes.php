<?php

$idade = 17;
$nome = "sabão";
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos !" . PHP_EOL;
echo "A partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos, pode entrar" . PHP_EOL;
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "VOCÊ TEM $idade anos, esta acompanhado, pode entrar" . PHP_EOL;
} else {
    echo "NÃO PODE ENTRAR !! ";
}



// para usar "ou" pode utilizar || 