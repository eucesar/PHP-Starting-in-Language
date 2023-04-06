<?php

$contador = 0;

//posso usar while tbm - while = enquanto
// = 1 pq começa no 1 ; até aonde eu quero que vá (condição) ; conta +1
for ($contador = 1; $contador <= 15 ; $contador++ ) { 
    echo "#$contador" . PHP_EOL;
}

/*
$contador = 0;

//fica dentro a propriedade central - condição
while ($contador <= 15){
    //deixo aqui dentro as propriedades POREM, q eu quero q tenha nesse while
    echo "#$contador" . PHP_EOL; - string + var
    $contador = $contador + 1;
}

*/
