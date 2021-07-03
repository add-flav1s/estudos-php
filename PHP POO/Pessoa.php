<?php

class Pessoa
{
    public $name;

    const ESPECIE = 'Humana';

    public function __construct($secondName)
    {
        $this->name = $secondName;
    }

    public function getName()
    {
        return $this->name;
    }
}