<?php 
declare (strict_types=1);

$res;
//Creando la funcion sumando
function sumando (int $num1, int $num2):string
{
    $resultado = $num1 + $num2;

    return "El resultado de la funcion sumando con $num1 y $num2 es $resultado";

}

$res = sumando(152,250);
echo  $res;

?>