<?php 
$miName = "Jim <br>";

echo $miName;

//Forzar el dato con un tipado

//(bool)
//(int)
//(float)
//(string)
//(array)
//(object)

$varNum = (int) 210;
$varBool = (bool) true;
$varTxt = (string) "Hola mundo";

var_dump($varNum);
var_dump($varBool);
var_dump($varTxt);

//Var decimal

$base = (float) 30.25;
$altura = (float) 15.2;

$areaRect = $base * $altura;
$areaTriangle =  ($base * $altura) / 2;
echo "El area del rectángulo es de ".$areaRect." cm^2 <br>";

echo "El area del triángulo es de ".$areaTriangle." cm^2 <br>";

//SCOPE de la Variable

$telephone = 75388834;

function showTel(){
    $telephone = 88312469;
echo "Mi numero es: ".$telephone."<br>";

}

showTel();

//Variables Super Globales

$message1 = "Hello World!";

function showMessage() {

    global $message1;
    echo "Ahora en ingles: ".$message1."<br>";
}
showMessage();

//Variables estáticas

function counter (){
        static $cont = 0;
        echo $cont."<br>";

        $cont++;
        echo $cont."<br>";

}

counter();
echo "<br>";
counter();
echo "<br>";
counter();
echo "<br>";

//Variables seteadas isset: determina si una variables esta definida
$edad = 14;

//Operador ternario

echo (isset($edad) and $edad > 18) ? "Es mayor de edad" : "No cumple la edad";

?>