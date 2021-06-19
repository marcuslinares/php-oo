<?php
class ContaBancaria {
  /* Modificadores de acessos: public, private, protected*/
  public $banco;
  public $nomeTitutlar = "Marcus Linares";
  public $numeroAgencia = "4032";
  public $numeroConta;
  public $saldo = "23,3";

}

//Uma instância
$conta = new ContaBancaria;

var_dump($conta->saldo);