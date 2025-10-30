<?php 
$num = [1,2,3,4,5];


$cinco_numeros = array_slice($num, 0, 5);
$soma = array_sum($cinco_numeros);

echo "cinco primeiros são:"; print_r($cinco_numeros);
echo "soma:".$soma;

?>
