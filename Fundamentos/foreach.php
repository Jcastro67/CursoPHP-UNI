<?php 
$colors = array("Red", "Green", "Blue");

foreach ($colors as $key => $value) {
    echo $key ."=>".$value;
    echo "<br>";
}

foreach ($colors as $value) {
    echo $value;
    echo "<br>";
}

?>