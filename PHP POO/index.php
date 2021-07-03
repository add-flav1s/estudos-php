<?php

require 'Pessoa.php';
require 'Programador.php';

$programador = new Programador('Joao', 'PHP');

echo $programador->getName();

echo $programador::ESPECIE;