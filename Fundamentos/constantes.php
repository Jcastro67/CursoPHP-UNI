<?php 
//DEFINIENDO LAS CONTANTES

/*
1) No necesita el simbolo $
2) Utilizar el método DEFINE
3) Se asigna UNA sola vez
4)Tiene alcance o SCOPE Global
*/

DEFINE('CUOTA', 250);

$valCuota = CUOTA;

echo "El valor de la cuota es: ".$valCuota;
echo "<br>";

DEFINE('CUOTA1', 2500);
echo "El valor de la cuota es: ".CUOTA1;
echo "<br>";

//BUENAS PRACTICAS EN USO DE CONSTANTES
/*
1) Usar siempre mayúsculas en sus definiciones o nombres
2) No usar nombres como 'VALOR'
3) No usar Guión bajo
-- Se puede confundir con variables globales propias de php
--- https://www.php.net/manual/en/book.strings.php
*/



?>