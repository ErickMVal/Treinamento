<?php

class Pessoa
{

    public $nome = "Júlio";
    protected $idade = 23;
    private $senha = "1qaz2wsx";

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}


$objeto = new Pessoa();

/*
echo $objeto->nome . "<br>";
echo $objeto->idade . "<br>";
echo $objeto->senha . "<br>";
*/
$objeto->verDados();
