<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assetes/style.css">
   
    
    <title>Exercícios PHP</title>
    
</head>
<body>
    <div class="container">
        <h1>ATIVIDADE DE AQUECIMENTO PHP</h1>

        <?php

        // 1. Soma
        echo "<div class='exercicio'>";
        echo "<h3>1. Soma</h3>";
        $num1 = 1;
        $num2 = 2;
        $soma = $num1 + $num2;
        echo "<p>Valores: <code>$num1</code> e <code>$num2</code></p>";
        echo "<div class='resultado'>A soma é: <strong>$soma</strong></div>";
        echo "</div>";

        // 2. Média
        echo "<div class='exercicio'>";
        echo "<h3>2. Média Aritmética</h3>";
        $nota1 = 9.0;
        $nota2 = 8.0;
        $nota3 = 6.5;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>Notas: <code>$nota1</code>, <code>$nota2</code>, <code>$nota3</code></p>";
        echo "<div class='resultado'>A média é: <strong>" . number_format($media, 2) . "</strong></div>";
        echo "</div>";

        // 3. Metros para Centímetros
        echo "<div class='exercicio'>";
        echo "<h3>3. Metros para Centímetros</h3>";
        $metros = 2.5;
        $centimetros = $metros * 100;
        echo "<p>Valor em metros: <code>$metros</code></p>";
        echo "<div class='resultado'>$metros metros equivalem a <strong>$centimetros centímetros</strong></div>";
        echo "</div>";

        // 4. Área do Retângulo
        echo "<div class='exercicio'>";
        echo "<h3>4. Área do Retângulo</h3>";
        $base = 10;
        $altura = 5;
        $area = $base * $altura;
        echo "<p>Base: <code>$base</code>, Altura: <code>$altura</code></p>";
        echo "<div class='resultado'>A área do retângulo é: <strong>$area</strong></div>";
        echo "</div>";



        // 5. Positivo ou Negativo
        echo "<div class='exercicio'>";
        echo "<h3>5. Positivo ou Negativo</h3>";
        $numero = -7;
        echo "<p>Número: <code>$numero</code></p>";
        echo "<div class='resultado'>";
        if ($numero > 0) {
            echo "O número é <strong>positivo</strong>";
        } elseif ($numero < 0) {
            echo "O número é <strong>negativo</strong>";
        } else {
            echo "O número é <strong>zero</strong>";
        }
        echo "</div></div>";

        // 6. Maioridade
        echo "<div class='exercicio'>";
        echo "<h3>6. Maioridade</h3>";
        $idade = 20;
        echo "<p>Idade: <code>$idade</code> anos</p>";
        echo "<div class='resultado'>";
        if ($idade >= 18) {
            echo "É <strong>maior de idade</strong>";
        } else {
            echo "É <strong>menor de idade</strong>";
        }
        echo "</div></div>";

        // 7. Aprovação
        echo "<div class='exercicio'>";
        echo "<h3>7. Aprovação</h3>";
        $mediaFinal = 5.8;
        echo "<p>Média final: <code>$mediaFinal</code></p>";
        echo "<div class='resultado'>";
        if ($mediaFinal >= 6.0) {
            echo "Situação: <strong>Aprovado</strong>";
        } else {
            echo "Situação: <strong>Reprovado</strong>";
        }
        echo "</div></div>";

        // 8. Maior de Dois
        echo "<div class='exercicio'>";
        echo "<h3>8. Maior de Dois Números</h3>";
        $a = 19;
        $b = 8;
        echo "<p>Números: <code>$a</code> e <code>$b</code></p>";
        echo "<div class='resultado'>";
        if ($a > $b) {
            echo "O maior número é: <strong>$a</strong>";
        } elseif ($b > $a) {
            echo "O maior número é: <strong>$b</strong>";
        } else {
            echo "Os números são <strong>iguais</strong>";
        }
        echo "</div></div>";


        // 9. Dia da Semana
        echo "<div class='exercicio'>";
        echo "<h3>9. Dia da Semana</h3>";
        $diaNumero = 3;
        echo "<p>Número do dia: <code>$diaNumero</code></p>";
        echo "<div class='resultado'>";
        switch ($diaNumero) {
            case 1:
                echo "Dia: <strong>Domingo</strong>";
                break;
            case 2:
                echo "Dia: <strong>Segunda-feira</strong>";
                break;
            case 3:
                echo "Dia: <strong>Terça-feira</strong>";
                break;
            case 4:
                echo "Dia: <strong>Quarta-feira</strong>";
                break;
            case 5:
                echo "Dia: <strong>Quinta-feira</strong>";
                break;
            case 6:
                echo "Dia: <strong>Sexta-feira</strong>";
                break;
            case 7:
                echo "Dia: <strong>Sábado</strong>";
                break;
            default:
                echo "Número inválido! Digite um número de 1 a 7.";
        }
        echo "</div></div>";

        // 10. Vogal ou Consoante
        echo "<div class='exercicio'>";
        echo "<h3>10. Vogal ou Consoante</h3>";
        $letra = 'B';
        $letraMinuscula = strtolower($letra);
        echo "<p>Letra: <code>$letra</code></p>";
        echo "<div class='resultado'>";
        switch ($letraMinuscula) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                echo "A letra '<strong>$letra</strong>' é uma <strong>vogal</strong>";
                break;
            default:
                echo "A letra '<strong>$letra</strong>' é uma <strong>consoante</strong>";
        }
        echo "</div></div>";

        // 11. Status do Pedido
        echo "<div class='exercicio'>";
        echo "<h3>11. Status do Pedido</h3>";
        $status = "em_preparacao";
        echo "<p>Status: <code>$status</code></p>";
        echo "<div class='resultado'>";
        switch ($status) {
            case "aguardando":
                echo "<strong>Seu pedido está aguardando processamento.</strong>";
                break;
            case "em_preparacao":
                echo "<strong>Seu pedido está em preparação!</strong>";
                break;
            case "enviado":
                echo "<strong>Seu pedido foi enviado!</strong>";
                break;
            case "concluido":
                echo "<strong>Seu pedido foi concluído com sucesso!</strong>";
                break;
            default:
                echo "<strong>Status desconhecido.</strong>";
        }
        echo "</div></div>";


        // 12. Contagem 1-10
        echo "<div class='exercicio'>";
        echo "<h3>12. Contagem de 1 a 10</h3>";
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }
        echo "</div></div>";

        // 13. Pares de 1 a 20
        echo "<div class='exercicio'>";
        echo "<h3>13. Números Pares de 1 a 20</h3>";
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo "$i ";
            }
        }
        echo "</div></div>";

        // 14. Tabuada
        echo "<div class='exercicio'>";
        echo "<h3>14. Tabuada</h3>";
        $numeroTabuada = 7;
        echo "<p>Tabuada do: <code>$numeroTabuada</code></p>";
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numeroTabuada * $i;
            echo "$numeroTabuada x $i = <strong>$resultado</strong><br>";
        }
        echo "</div></div>";




        // 15. Contagem Regressiva
        echo "<div class='exercicio'>";
        echo "<h3>15. Contagem Regressiva</h3>";
        echo "<div class='resultado'>";
        $contador = 10;
        while ($contador >= 1) {
            echo "$contador ";
            $contador--;
        }
        echo "Fogo!";
        echo "</div></div>";

        // 16. Soma até 100
        echo "<div class='exercicio'>";
        echo "<h3>16. Soma de 1 até 100</h3>";
        $somaTotal = 0;
        $i = 1;
        while ($i <= 100) {
            $somaTotal += $i;
            $i++;
        }
        echo "<div class='resultado'>A soma de todos os números de 1 a 100 é: <strong>$somaTotal</strong></div>";
        echo "</div>";




        // 17. Sorteio Simples
        echo "<div class='exercicio'>";
        echo "<h3>17. Sorteio Simples</h3>";
        $tentativas = 0;
        $numeroSorteado = 0;
        echo "<div class='resultado'>";
        do {
            $numeroSorteado = rand(1, 10);
            $tentativas++;
            echo "Tentativa $tentativas: sorteado <strong>$numeroSorteado</strong><br>";
        } while ($numeroSorteado != 5);
        echo "<br><strong>Número 5 encontrado após $tentativas tentativas!</strong>";
        echo "</div></div>";





        // 18. Lista de Frutas
        echo "<div class='exercicio'>";
        echo "<h3>18. Lista de Frutas</h3>";
        $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Morango"];
        echo "<p>Array: <code>" . implode(", ", $frutas) . "</code></p>";
        echo "<div class='resultado'>";
        echo "<strong>Lista de Frutas:</strong><ul>";
        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }
        echo "</ul>";
        echo "</div></div>";

        // 19. Soma de Array
        echo "<div class='exercicio'>";
        echo "<h3>19. Soma de Array</h3>";
        $numeros = [10, 20, 30, 40, 50];
        $somaArray = array_sum($numeros);
        echo "<p>Array: <code>" . implode(", ", $numeros) . "</code></p>";
        echo "<div class='resultado'>A soma dos números é: <strong>$somaArray</strong></div>";
        echo "</div>";

        // 20. Array Associativo
        echo "<div class='exercicio'>";
        echo "<h3>20. Array Associativo - Aluno</h3>";
        $aluno = [
            "nome" => "João Silva",
            "idade" => 22,
            "curso" => "Engenharia de Software"
        ];
        echo "<div class='resultado'>";
        echo "<strong>Dados do Aluno:</strong><br>";
        echo "Nome: <strong>" . $aluno["nome"] . "</strong><br>";
        echo "Idade: <strong>" . $aluno["idade"] . " anos</strong><br>";
        echo "Curso: <strong>" . $aluno["curso"] . "</strong>";
        echo "</div></div>";


        echo "<div class ='exercicio'>";
        echo "<h3>21. FIM </h3>";
        $fim = "fim";
        echo "<div class='resultado'><p>Você chegou ao <strong>$fim</strong></p></div>";
        echo "</div>";
        ?>
    </div>
</body>
</html>