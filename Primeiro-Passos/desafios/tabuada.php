<?php

$multiplicador = 7;
$resultado;

for ($i=1; $i <=10 ; $i++) { 
    $resultado = $i * $multiplicador;
    echo "$i x $multiplicador = $resultado" . PHP_EOL;
}
