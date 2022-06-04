<?php
$num = 50;

//Variables tipo entero
echo "Esto es el primer integer = ". $num;
echo "<br>Esto es el primer integer = $num";
echo "<br>";

var_dump($num);

//Variables float
$num2 = 0.256;
echo "Esto es el primer float = ". $num2;
echo "<br>";

var_dump($num2);

//Variables float
$word = "Jim";
echo "My name = ". $word;
echo "<br>";

var_dump($word);

//Variables Boolean
$varboolean1=false;
$varboolean2=true;

echo "Verdadero = ". $varboolean2;
echo "<br>";

echo "Falso = ". $varboolean1;
echo "<br>";
echo "<br>";
//Variables Array
$fruits = ["Apple", "Onion", "Garlic"];
$animals = array ("dog", "rat", "cat");

echo "Fruta posicion 1 = ". $fruits[0];
echo "<br>";

echo "Animal posicion 3 = ". $animals[2];
echo "<br>";
echo "<br>";

$autos = ["toyota" => "Hilux", "Hyundai" => "i20", "Nissan"=>"Versa"];
echo "Este Nissan es modelo = ". $autos["Nissan"];

echo "<br>";
echo "<br>";

//Objetos
$smartphone = (object)["gama" => "alta", "marca" => "Samsung"];

echo "Esto es un celular gama ".$smartphone->gama . " marca ".$smartphone->marca;
?>