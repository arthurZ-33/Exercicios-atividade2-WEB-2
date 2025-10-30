<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden; /* Para conter o box-shadow */
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .exercicio:last-child {
            border-bottom: none;
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .resultado strong {
            color: #004a99;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
        ul, ol {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>
        <?php
        // Bloco de código PHP começa aqui
        // ----------------------------------------------------
        // Exercício 1: Soma (exrc1.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 1: Soma de dois números</h3>";
        $num1_1 = 12;
        $num2_1 = 32;
        $soma_1 = $num1_1 + $num2_1;
        echo "<p>Valores: <code>$num1_1</code> e <code>$num2_1</code></p>";
        echo "<div class='resultado'>A soma será de: <strong>$soma_1</strong></div>";
        echo "</div>";
    
        // ----------------------------------------------------
        // Exercício 2: Média (exer2.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 2: Média de três números</h3>";
        $num1_2 = 24;
        $num2_2 = 35;
        $num3_2 = 10;
        $media_2 = ($num1_2 + $num2_2 + $num3_2) / 3;
        echo "<p>Valores: <code>$num1_2</code>, <code>$num2_2</code> e <code>$num3_2</code></p>";
        echo "<div class='resultado'>A média será de: <strong>" . number_format($media_2, 2, ',', '.') . "</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 3: Metros para Centímetros (exer3.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 3: Metros para Centímetros</h3>";
        $metros_3 = 10;
        $centimetros_3 = $metros_3 * 100;
        echo "<p>Valor: <code>$metros_3</code> metros</p>";
        echo "<div class='resultado'>O valor de metros convertido para centímetros é: <strong>$centimetros_3</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 4: Área do Triângulo (exer4.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 4: Área do Triângulo</h3>";
        $base_4 = 10;
        $altura_4 = 5; 
        $area_4 = $base_4 * $altura_4 / 2;
        echo "<p>Base: <code>$base_4</code>, Altura: <code>$altura_4</code></p>";
        echo "<div class='resultado'>A área do triângulo é: <strong>$area_4</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 5: Positivo, Negativo ou Zero (exer5.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 5: Positivo, Negativo ou Zero</h3>";
        $num_5 = 7;
        $resultado_5 = "";
        if($num_5 > 0){
            $resultado_5 = "O número é positivo";
        } else if($num_5 < 0){
            $resultado_5 = "O número é negativo";
        } else { // O original tinha 'else if ($num_5 == 0)' mas 'else' é suficiente
            $resultado_5 = "O número é zero";
        }
        echo "<p>Número: <code>$num_5</code></p>";
        echo "<div class='resultado'><strong>$resultado_5</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 6: Maior de Idade (exer6.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 6: Maior ou Menor de Idade (Ternário)</h3>";
        $idade_6 = 23;
        $maiorIdade_6 = ($idade_6 >= 18) ? "Maior de idade" : "Menor de idade";
        echo "<p>Idade: <code>$idade_6</code></p>";
        echo "<div class='resultado'><strong>$maiorIdade_6</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 7: Status de Aprovação (exer7.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 7: Status de Aprovação (Switch True)</h3>";
        $mediaFinal_7 = 75;
        $status_7 = "";
        switch(true) {
            case ($mediaFinal_7 >= 70):
                $status_7 = "Aprovado";
                break;
            case ($mediaFinal_7 >= 50):
                $status_7 = "Recuperação";
                break;
            default:
                $status_7 = "Reprovado";
                break;
        }
        echo "<p>Média Final: <code>$mediaFinal_7</code></p>";
        echo "<div class='resultado'>Status: <strong>$status_7</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 8: Maior e Menor Número (exer8.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 8: Maior e Menor Número</h3>";
        $num1_8 = 12;
        $num2_8 = 53;
        $resultado_8 = "";
        if($num1_8 > $num2_8){
            $resultado_8 = "O número maior é: $num1_8<br>O número menor é: $num2_8";
        } else if($num2_8 > $num1_8){
            $resultado_8 = "O número maior é: $num2_8<br>O número menor é: $num1_8";
        } else {
            $resultado_8 = "Os números são iguais: $num1_8";
        }
        echo "<p>Valores: <code>$num1_8</code> e <code>$num2_8</code></p>";
        echo "<div class='resultado'>$resultado_8</div>"; // Sem strong por causa do <br>
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 9: Dia da Semana (exer9.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 9: Dia da Semana (Switch)</h3>";
        $dia_9 = 3;
        $diaNome_9 = "";
        switch ($dia_9) {
            case 1: $diaNome_9 = "Domingo"; break;
            case 2: $diaNome_9 = "Segunda-feira"; break;
            case 3: $diaNome_9 = "Terça-feira"; break;
            case 4: $diaNome_9 = "Quarta-feira"; break;
            case 5: $diaNome_9 = "Quinta-feira"; break;
            case 6: $diaNome_9 = "Sexta-feira"; break;
            case 7: $diaNome_9 = "Sábado"; break;
            default: $diaNome_9 = "Dia inválido!"; break;
        }
        echo "<p>Número do Dia: <code>$dia_9</code></p>";
        echo "<div class='resultado'>Dia: <strong>$diaNome_9</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 10: Vogal ou Consoante (exer10.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 10: Vogal ou Consoante</h3>";
        $letra_10 = "A";
        $tipoLetra_10 = "";
        switch ($letra_10) {
            case "A":
            case "E":
            case "I":
            case "O":
            case "U":
            case "a": 
            case "e":
            case "i":
            case "o":
            case "u":
                $tipoLetra_10 = "Vogal";
                break;
            default:
                $tipoLetra_10 = "Consoante";
                break;
        }
        echo "<p>Letra: <code>$letra_10</code></p>";
        echo "<div class='resultado'>Tipo: <strong>$tipoLetra_10</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 11: Status do Pedido (exer11.php)
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
        // Fim do bloco PHP
        ?>
    </div>
</body>
</html>