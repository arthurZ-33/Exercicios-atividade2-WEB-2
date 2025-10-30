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
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 11: Status do Pedido (Switch Array)</h3>";
        $status_11 = ["aguardando", "em preparamento", "enviando", "entregue"];

        $insercao_11 = $status_11[0]; // Renomeada para evitar conflito
        $resultado_11 = ""; // Variável para capturar o resultado
        switch($insercao_11){
            case "aguardando": 
                $resultado_11 = "Aguardando";
                break;
            case "em preparamento": 
                $resultado_11 = "Em preparamento";
                break;
            case "enviando": 
                $resultado_11 = "Enviando";
                break;
            case "entregue": 
                $resultado_11 = "Entregue";
                break;
            default:
                $resultado_11 = "Status inválido";
                break;
        }
        echo "<p>Status Base: <code>$insercao_11</code></p>";
        echo "<div class='resultado'>Status Atual: <strong>$resultado_11</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 12: Contador de 1 a 10 (exer12.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 12: Contador de 1 a 10 (For)</h3>";
        echo "<div class='resultado'>";
        $lista_12 = [];
        for ($contador_12 = 1; $contador_12 <= 10; $contador_12++){ // Variável renomeada
            $lista_12[] = "seu contador " . $contador_12; // Corrigido '+' para '.'
        }
        echo implode(" | ", $lista_12);
        echo "</div>";
        echo "</div>";


        // ----------------------------------------------------
        // Exercício 13: Contador de 1 a 20 em números pares (exer13.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 13: Contador de 1 a 20 em números pares (For)</h3>";
        echo "<div class='resultado'>";
        $lista_13 = [];
        // Para pares, o loop deve começar em 2 ou o incremento deve ser de 2 em 2
        // Assumindo que a intenção é exibir ímpar (1, 3, 5...) dado o $contador += 2, mas no título diz 'pares'
        // Mantendo a lógica do seu loop original (que pega ímpares):
        for($contador_13 = 1; $contador_13 <= 20; $contador_13 += 2){ // Variável renomeada
            $lista_13[] = "o seu contador: " . $contador_13; // Corrigido '+' para '.'
        }
        echo implode(" | ", $lista_13);
        echo "</div>";
        echo "</div>";


        // ----------------------------------------------------
        // Exercício 14: Contador de 1 a 10 tabuada (exer14.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 14: Tabuada do Número 5 (For)</h3>";
        echo "<div class='resultado'>";
        $numero_14 = 5; // Variável renomeada
        $lista_14 = [];

        for($cont_14 = 1; $cont_14 <= 10; $cont_14++){ // Variável renomeada
            $resultado_14 = $numero_14 * $cont_14; // Variável renomeada
            $lista_14[] = "$numero_14 x $cont_14 = $resultado_14";
        }
        echo implode("<br>", $lista_14);
        echo "</div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 15: Contador de 10 a 1 (exer15.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 15: Contador de 10 a 1 (While)</h3>";
        echo "<div class='resultado'>";
        $contador_15 = 10; // Variável renomeada
        $lista_15 = [];

        while($contador_15 >= 1){
            $lista_15[] = "Simples contador: " . $contador_15;
            $contador_15 --;
        }
        echo implode(" | ", $lista_15);
        echo "</div>";
        echo "</div>";
        

        // ----------------------------------------------------
        // Exercício 16: Contador para somar até 100 (exer16.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 16: Soma Acumulada de 1 até 100 (While)</h3>";
        $soma_16 = 4; // Variável renomeada - Começa com 4 (valor inicial)
        $contador_16 = 1; // Variável renomeada
        $limite_16 = 100; // Variável renomeada
        
        while($contador_16 <= $limite_16){
            $soma_16 = $soma_16 + $contador_16;
            $contador_16 ++;
        }
        echo "<p>Soma inicial: <code>4</code>. Soma os números de 1 até $limite_16.</p>";
        echo "<div class='resultado'>A soma final é: <strong>$soma_16</strong></div>";
        echo "</div>";

        // ----------------------------------------------------
        // Exercício 17: Sorteio até achar o número 5! (exer17.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 17: Sorteio até achar o número 5 (Do-While)</h3>";
        echo "<div class='resultado'>";
        $numero_17 = 0; // Variável renomeada e inicializada
        $sorteios_17 = []; // Array para guardar os sorteios

        do{ 
            $numero_17 = rand(1, 10);
            $sorteios_17[] = $numero_17;
        } while($numero_17 != 5 );
        
        echo "Números sorteados: " . implode(", ", $sorteios_17) . "<br>";
        echo "<strong>Finalmente utilizou o 5 xiru!</strong>";
        echo "</div>";
        echo "</div>";
        
        // ----------------------------------------------------
        // Exercício 18: Lista de frutas (exer18.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 18: Lista de Frutas (Foreach com HTML)</h3>";
        $lista_frutas_18 = ["maçã", "banana", "perâ", "abacaxi", "morango"]; // Variável renomeada
        ?>
        <p>Lista de frutas:</p>
        <ul>
        <?php foreach ($lista_frutas_18 as $fruta_18): // Variável renomeada ?>
            <li> <?php echo $fruta_18; ?> </li>
        <?php endforeach; ?>
        </ul>        
        <?php
        echo "</div>";
        // ----------------------------------------------------
        // Exercício 19: Soma total de 5 arrays (exer19.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 19: Soma de um Array (Array_Sum)</h3>";
        
        $num_19 = [1, 2, 3, 4, 5, 6, 7]; // Variável renomeada (o array tem mais de 5, mas você usa slice)

        $cinco_numeros_19 = array_slice($num_19, 0, 5); // Variável renomeada
        $soma_19 = array_sum($cinco_numeros_19); // Variável renomeada

        echo "<p>Array Completo: <code>[" . implode(", ", $num_19) . "]</code></p>";
        echo "<p>Cinco primeiros são: <code>[" . implode(", ", $cinco_numeros_19) . "]</code></p>";
        echo "<div class='resultado'>Soma: <strong>".$soma_19."</strong></div>"; // Corrigido o echo
        echo "</div>";
        ?>

        <?php 
        // ----------------------------------------------------
        // Exercício 20: Lista com array associativo (exer20.php)
        echo "<div class='exercicio'>";
        echo "<h3>Exercício 20: Dados do Aluno (Array Associativo)</h3>";

        $aluno_20 = [ // Variável renomeada
            "nome" => "marcelo",
            "idade" => 21,
            "curso" => "TI"
        ];

        echo "<p>Nome: <strong>" . $aluno_20["nome"] . "</strong></p>"; // Formatado para o .resultado
        echo "<p>Idade: <strong>" . $aluno_20["idade"] . "</strong></p>";
        echo "<p>Curso: <strong>" . $aluno_20["curso"] . "</strong></p>";
        echo "<div class='resultado'>Detalhes do Aluno: " . $aluno_20["nome"] . " (" . $aluno_20["idade"] . " anos) - " . $aluno_20["curso"] . "</div>";
        echo "</div>";
        ?>


        <?php
        // Fim do bloco PHP
        ?>

        
    </div>
</body>
</html>