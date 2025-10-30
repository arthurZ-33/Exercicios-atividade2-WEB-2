<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $status = ["aguardando", "em preparamento", "enviando", "entregue"];

    $inserção = $status[0];
    switch($inserção){
        case "aguardando": 
            echo "Aguardando";
            break;
        case "em preparamento": 
            echo "Em preparamento";
            break;
        case "enviando": 
            echo "Enviando";
            break;
        case "entregue": 
            echo "Entregue";
            break;
        default:
            echo "Status invalido";
            break;
    }

    ?>
</body>
</html>