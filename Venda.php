<?php

class Venda {
  /* Modificadores de acessos: public, private, protected*/
  private $data;
  private $produto;
  private $quantidade;
  private $valorTotal;

  //Método construtor
  public function __construct($data, $produto, $quantidade, $valorTotal)
  {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
  }

  //Método
  public function exibirVenda()
  {
    return 'Produto vendido: ' . 
    PHP_EOL . 'Data: ' . $this->data . 
    PHP_EOL . 'Produto: ' . $this->produto . 
    PHP_EOL . 'Quantidade: ' . $this->quantidade . 
    PHP_EOL . 'Valor Total: ' . $this->valorTotal . PHP_EOL;
  }


}

//Uma instância
$venda = new Venda(
  "19/06/2021", //data
  "Arroz", //produto
  "2", //quantidade
  "10.00", //valorTotal
);

echo $venda->exibirVenda();
echo PHP_EOL;
