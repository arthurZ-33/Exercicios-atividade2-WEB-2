<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio10</title>
</head>
<body>
    
<?php 

$letra = "A";

switch ($letra) {
    case "A":
    case "E":
    case "I":
    case "O":
    case "U":
        echo "Vogal";
        break;
    
    default:
        echo "Consoante";
        break;
}

?>

</body>
</html>