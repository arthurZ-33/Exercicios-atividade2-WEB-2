<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
</head>
<body>
    
<?php 
$dia = 3;

switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido!";
        break;
}

?>

</body>
</html>