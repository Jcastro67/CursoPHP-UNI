<?php 
//Condicionales

$edad = 8;

if ($edad >= 18){
echo "Cumple con la edad";
echo "<br>";
}
else{
    echo "NO cumple con la edad";
    echo "<br>";
}

$poseeCedula = true;

if ($edad >= 18 || $poseeCedula){
    echo "Cumple con al menos uno de los requisitos";
    echo "<br>";
}
else{
        echo "NO cumple con los requisitos";
        echo "<br>";
}

//Si el dato es nulo

$fullName = null;

if (is_null($fullName)){
    echo "Null";
}
else{
    echo "Not empty, contains: ".$fullName;
}

echo "<br>/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/<br>";

$fullName1 = "";

if ($fullName == ""){
    echo "Empty";
}
else{
    echo "Not empty, contains: ".$fullName;
}
?>