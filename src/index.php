<?php

require_once './Model/Carro.php';
require_once './Model/Caminhao.php';


// Estou crinado um objeto
// instanciando a classe
$carroHbVinte = new Carro('Hb20', 'Azul', 2021);
$foodTruck = new Caminhao('foodtruck', 'Azul', 1998, 200);

// $carroHbVinte->cor = 'Verde';
$carroHbVinte->alterarCor('Verde');

echo $carroHbVinte->obterCor();
echo '<br>';
echo $carroHbVinte->obterIdadeDoCarro();
echo $carroHbVinte->obterMarca();

echo '<br>';
echo $foodTruck->obterIdadeDoCarro();
echo '<br>';
echo $foodTruck->obterTamanhoBau();
echo $foodTruck->obterMarca();