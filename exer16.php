<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
    
<?php 

$soma = 4;
$contador = 1;
$limite = 100;

while($contador <= $limite){
    $soma = $soma + $contador;
    $contador ++;
    echo "a soma é: $soma";
}

?>

</body>
</html>