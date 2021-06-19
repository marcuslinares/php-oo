<?php

declare(strict_types=1);
class ContaBancaria {
  /* Modificadores de acessos: public, private, protected*/

  /**
   * @var string
   */
  private $banco;

  /**
   * @var string
   */  
  private $nomeTitular;
  
  /**
   * @var string
   */  
  private $numeroAgencia;
  
  /**
   * @var string
   */  
  private $numeroConta;
  
  /**
   * @var float
   */  
  private $saldo;

  //Método construtor
  public function __construct(
    string $banco, 
    string $nomeTitular, 
    string $numeroAgencia, 
    string $numeroConta, 
    float $saldo
  ){
    $this->banco = $banco;
    $this->nomeTitular = $nomeTitular;
    $this->numeroAgencia = $numeroAgencia;
    $this->numeroConta = $numeroConta;
    $this->saldo = $saldo;
  }

  //Método
  public function obterSaldo(): string
  {
    return 'Seu saldo atual é: R$ ' . $this->saldo;
  }

  public function depositar(float $valor): string
  {
    $this->saldo += $valor;
    return 'Deposito de R$ ' . $valor . ' realizado!';
  }

  public function sacar(float $valor): string
  {
    $this->saldo -= $valor;
    return 'Saque de R$ ' . $valor . ' realizado!';
  }

}

//Uma instância
$conta = new ContaBancaria(
  "Banco Itaú", //banco
  "Marcus Linares", //nomeTitular
  "123", //numeroAgencia
  "456789-4", //numeroConta
  300.00 //saldo
);
//echo $conta->obterSaldo();

echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->depositar(300.00);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(150.00);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;