<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }
        h1 {
            color: blue;
        }

        h2 {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Aula 5</h1>

    <?php
        echo "<h2>Operações aritméticas</h2>";
    
        $n1 = 24;
        $n2 = 12;

        echo 
        "
        <p>Considerando os números $n1 e $n2, vejamos os resultados das operações de:</p>
        <ul>
            <li>Soma: " .  ($n1 + $n2) . "</li>
            <li>Subtração: " .  ($n1 - $n2) . "</li>
            <li>Multiplicação: " .  ($n1 * $n2) . "</li>
            <li>Divisão: " .  ($n1 / $n2) . "</li>
            <li>Módulo: " .  ($n1 % $n2) . "</li>
            <li>Média: " .  ( ($n1 + $n2) / 2 ) . "</li>
        </ul>
        ";

        echo "<h3>Saque FGTS</h3>";

        $saldo =  3117.87;
        $auxilio = 1045;
        $total = $saldo + $auxilio;

        echo "<p>Com o auxílio emergencial concedido pelo Governo, meu saldo será de R$" . $total . "</p>";
    ?>
</body>

</html>