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
    
        echo "<h3>Igual e Idêntico</h3>";

        $a = "5";
        $b = 5;

        $igual = ($a == $b) ? "Sim" : "Não"; // ==

        $identico = ($a === $b) ? "Sim" : "Não"; // ===
    

        echo "<p>P.: A variável A é igual à variável B? R.: $igual.</p>";
        echo "<p>P.: A variável A é idêntica à variável B? R.: $identico.</p>"; 
    ?>
</body>

</html>