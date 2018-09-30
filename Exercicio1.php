<?php

class Fabricante
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

class Carro
{
    private $modelo;
    private $ano;
    private $preco;
    private $fabricante;

    public function __construct(Fabricante $fabricante, $modelo, $ano, $preco)
    {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDetalhes()
    {
        return 'O carro é do fabricante '.$this->fabricante->getNome().', modelo '.$this->modelo.', do ano '.$this->ano.' e custa '.number_format($this->preco,0,',','.').' reais.';
    }
}

$f1 = new Fabricante('Ford');
$c1 = new Carro($f1, 'Ambar', 2019, 90000);

echo $c1->getDetalhes();

?>