<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
    'Banco Exemplo',
    'João da Silva',
    '1234',
    '56789-0',
    0
);
var_dump($conta->exibirDadosDaConta());

echo $conta->depositar(200.00);
echo PHP_EOL;

echo $conta->sacar(150.00);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;