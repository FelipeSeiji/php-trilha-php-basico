<?php

declare(strict_types=1);

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return  $this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }
}
$conta = new ContaBancaria(
    "Banco do Basil",
    "Felipe",
    "1234",
    "56789-0",
    0
);

var_dump($conta->obterSaldo());

$conta->depositar(300);

var_dump($conta->obterSaldo());

$conta->sacar(100);

var_dump($conta->obterSaldo());