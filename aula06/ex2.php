<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 6</h1>

    <?php
        echo "<h2>Operadores de atribuição</h2>";
    
        echo 
        "
        <h3>Exercicio 2</h3>
        <p>Mostrar o ano anterior a um certo ano.</p>
        ";

        $ano = $_GET["ano"];

        echo "<p>Ano = $ano.</p>"; 

        $anoAnterior = --$ano;

        echo "<p>Ano anterior = $anoAnterior.</p>";
    ?>
</body>

</html>