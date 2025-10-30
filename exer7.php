<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    
<?php 
$mediaFinal = 75;

switch(true) //Básicamente se um if e switch tivessem um se apaixonado a primeira vista.//
{
    case ($mediaFinal >= 70):
    echo "Aprovado";
    break;

    case ($mediaFinal >= 50):
    echo "Recuperação";
    break;

    default:
        echo "Reprovado";
    break;
}

?>

</body>
</html>