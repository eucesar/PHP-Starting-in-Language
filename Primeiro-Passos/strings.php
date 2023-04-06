<?php

$idade = 21;
echo 'Minha idade: ' . $idade . ' anos'; //para adicionar 2 variaveis juntos eu uso aspas simples - e uso PONTO " . " , para juntar variavel
//msm coisa q sinal de MAIS

echo "\tMinha idade: $idade anos\n"; //se eu colocar com aspas duplas, o php vai entender oq é variavel e o eh texto|leh espaço certinho
// \n = quebra de linha - proximo item quebra a linha
// \t = tabe 

echo "Minha idade: $idade anos" . PHP_EOL; //quebra de linha sem umsar o " /n " = do proprio php
