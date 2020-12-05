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
    <h1>Aula 7</h1>

    <?php
        echo "<h2>Operadores relacionais</h2>";
    
        echo 
        "
        <h3>Exercicio 1</h3>
        <p>Permitir que o usuário escolha entre somar e multiplicar dois números.</p>
        ";

        $operacao = $_GET["op"]; //S para Soma e M para Multiplicação
        $operacao_formatada = ($operacao == "S")?"+":"*";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $resultado = ($operacao == "S") ? $n1 + $n2 : $n1 * $n2;

        echo "<p>Operação: $n1 $operacao_formatada $n2 = $resultado.</p>"; 
    ?>
</body>

</html>