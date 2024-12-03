<?php
  Class Conta{
    public $nomepessoa;
    public $saldo;

    public function extrato();
       echo($this->nomepessoa);
       echo($this->saldo);
  }
  public function saque($retirada){
    $this->saldo = $retirada;
  }
  public function deposito($deposito){
    $this->saldo = $this->saldo + $deposito;
  }
  ?>