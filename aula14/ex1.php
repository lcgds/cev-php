<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<h1>Aula 14</h1>
    <h2>Funções em PHP – Parte 1</h2>

    <h3>Exercicio 1</h3>
    <p>Criar um procedimento que realize um cálculo com dois valores numéricos inteiros.</p>

    <?php
        function calcule($n1, $op, $n2) {

            switch ($op) {
                case "soma":
                    $resultado = $n1 + $n2;
                    $exibe_op = "+";
                    break;
                case "subtracao";
                    $resultado = $n1 - $n2;
                    $exibe_op = "-";
                    break;
                case "divisao";
                    $resultado = $n1 / $n2;
                    $exibe_op = "/";
                    break;
                case "multiplicacao";
                    $resultado = $n1 * $n2;
                    $exibe_op = "*";
                    break;
            }            
            
            echo "<p>$n1 $exibe_op $n2 = $resultado.</p>";
        }

        calcule (1, "soma", 2);
        calcule (10, "subtracao", 5);
        calcule (8, "divisao", 4);
        calcule (3, "multiplicacao", 3);
    ?>
</body>

</html>