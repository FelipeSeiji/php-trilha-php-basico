<?php

declare(strict_types=1);

namespace App;

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco = '',
        string $nomeTitular = '',
        string $numeroAgencia = '',
        string $numeroConta = '',
        float $saldo = 0
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return "Depósito de R$ {$valor} realizado com sucesso.";
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return "Saque de R$ {$valor} realizado com sucesso.";
    }

    public function obterSaldo(): string
    {
        return "O saldo atual da conta é R$ {$this->saldo}.";
    }

    public function setBanco(string $banco): void{
        $this->banco = $banco;
    }
    public function getBanco(): string
    {
        return $this->banco;
    }
    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }
    public function setNumeroAgencia(string $numeroAgencia): void
    {
        $this->numeroAgencia = $numeroAgencia;
    }
    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }
    public function setNumeroConta(string $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }
    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function exibirDadosDaConta(): array
    {
        return [
            'banco' => $this->getBanco(),
            'nomeTitular' => $this->getNomeTitular(),
            'numeroAgencia' => $this->getNumeroAgencia(),
            'numeroConta' => $this->getNumeroConta(),
            'saldo' => $this->getSaldo()
        ];
    }


}