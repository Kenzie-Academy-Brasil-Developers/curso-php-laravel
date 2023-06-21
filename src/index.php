<?php

// let name = 'Tsunoda'
$name = '';

echo "Curso PHP Atualizando 2 " . $name;
echo "<h1>Teste</h1>";

// Condicionais
// if($name == 'João') {
//     echo 'Olá, João';
// } elseif ($name == 'Maria') {
//     echo 'Olá, Maria';
// } else {
//     echo 'Olá';
// }

// Ternário
echo $name == 'Maria' ? 'Olá Maria' : 'Ops';
// ?? javascript
$newName = ($name) ?: "Sem nome";

echo '<br>';
echo $newName;

echo '<br>';

// Listas
$numeros = array('1', 'A', 'D');

// Array da forma tradiconal
// const numeros = ['1', 'A', 'D'];
$numerosOutraSintaxe = ['1', 'A', 'D'];


echo print_r($numerosOutraSintaxe);

// const user = {
//     name: 'tsunode',
//     age: 25
// }

$user = [
    'name' => 'tsunode',
    'age' => 25
];

echo '<br>';
echo print_r($user);
echo '<br>';
echo $user['age'];
echo $numerosOutraSintaxe[2];

//

// versão > 8.1
// const { age } = user;
['name' => $name] = $user;
echo '<br>';
echo 'Desestruturado ' . $name;

// ['1', 'A', 'D']
// const [numero1, numero2] = numeros;
[$numero1,,$numero3] = $numerosOutraSintaxe;
echo '<br>';
echo 'Desestruturado ' . $numero3;


// Spread
// const newUser = {
//     ...user,
//     surname: 'tsunoda'
// }

$newUser = [...$user, 'surname' => 'Tsunoda'];
echo '<br>';
echo print_r($newUser);
echo '<br>';


// Loop
for ($i=0; $i < 10; $i++) {
    echo $i . " ";
}

foreach ($numerosOutraSintaxe as $numero) {
    echo '<br>';
    echo $numero;
}

foreach ($newUser as $chave) {
    echo '<br>';
    echo $chave;
}

// Add Lista
array_push($numerosOutraSintaxe, '2');
$numerosOutraSintaxe[] = '5';

unset($numerosOutraSintaxe[2]);

[$teste] = $numerosOutraSintaxe;
echo '<br> tetse <br>';
echo $teste;

echo print_r(var_dump($numerosOutraSintaxe));
$novoArrayOrdenado = array_values($numerosOutraSintaxe);

echo '<br>';
echo print_r($novoArrayOrdenado);

