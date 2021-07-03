<?php

class Programador extends Pessoa
{
    public $linguagem;

    public function __construct($secondName, $firstLinguagem)
    {
        $this->name = $secondName;
        $this->linguagem = $firstLinguagem;
    }
}