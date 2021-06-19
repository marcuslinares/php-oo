<?php
class ContaBancaria {
  /* Modificadores de acessos: public, private, protected*/
  public $banco = "Itaú";
  public $nomeTitutlar = "Marcus Linares";
  public $numeroAgencia = "4032";
  public $numeroConta = "12345678";
  public $saldo = 23.3;

}

//Uma instância
$conta = new ContaBancaria;

var_dump($conta);