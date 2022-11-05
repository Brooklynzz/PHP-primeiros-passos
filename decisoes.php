<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos, ou a partir de 16 anos, caso acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.". PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas >= 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos e não está acompanhado, você não pode entrar." . PHP_EOL;
}
echo "Adeus!";