<?php
$numeros = array(10, 99, 35, 54, 40); 
rsort($numeros); //ordena de forma decrescente
foreach($numeros as $numero){
    echo $numero . "<br>";
}
?>