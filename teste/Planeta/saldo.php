<?php
class Banco {
    private $nomeCliente;
    private $saldo;

    // Construtor para inicializar o nome do cliente e o saldo
    public function __construct($nomeCliente, $saldoInicial) {
        $this->nomeCliente = $nomeCliente;
        $this->saldo = $saldoInicial;
    }

    // Getter para o nome do cliente
    public function getNomeCliente() {
        return $this->nomeCliente;
    }

    // Setter para o nome do cliente
    public function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    // Getter para o saldo
    public function getSaldo() {
        return $this->saldo;
    }

    // Método público para exibir o extrato, chama função privada internamente
    public function extrato() {
        echo($this->getSaldo());
        echo($this->getNomeCliente());
    }

    // Método público para realizar depósito, chama função privada internamente
    public function deposito($valor) {
        $this->fazerDeposito($valor);
    }

    // Método público para realizar saque, chama função privada internamente
    public function saque($valor) {
        $this->fazerSaque($valor);
    }
}

// Exemplo de uso
$conta = new Banco("Luis Felipe", 1000);

// Exibir extrato
$conta->extrato();

// Realizar depósito
$conta->deposito(500);
$conta->extrato(); // Exibir extrato após depósito

// Realizar saque
$conta->saque(300);
$conta->extrato(); // Exibir extrato após saque

// Modificar nome do cliente usando setter
$conta->setNomeCliente("Denise");
echo "Novo cliente: " . $conta->getNomeCliente() . "\n";

// Tentativa de saque com saldo insuficiente
$conta->saque(1500);
$conta->extrato();
?>