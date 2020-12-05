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
            <h3>Exercicio 4</h3>
            <p>Mostrar se um eleitor é obrigado a votar ou não.</p>
        ";

        /*
            00 ~ 15 = Proibido
            16 ~ 17 = Opcional
            18 ~ 64 = Obrigatório
            65 > .. = Opcional
        */

        $ano = $_GET["n"];
        $idade = 2020 - $ano;

        echo "<p>Idade = $idade.</p>";

        $proibido = ($idade <= 15) ? "Sim" : "Não";
        $opcional = ($idade == 16 || $idade == 17 || $idade >= 65) ? "Sim" : "Não";
        $obrigatorio = ($idade >= 18 && $idade <= 64) ? "Sim" : "Não";

        echo 
        "
            <p>P.: Voto proibido? R.: $proibido.</p>
            <p>P.: Voto opcional? R.: $opcional.</p>
            <p>P.: Voto obrigatório? R.: $obrigatorio.</p>
        ";
    ?>
</body>

</html>