<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Aula 8 - Integração HTML5 + PHP</h1>

    <h2>Exercicio 1</h2>
    <p>Ler um valor e mostrar sua raíz quadrada.</p>
    
    <form method="GET" action="ex1.php">
        <p>
            Valor: <input type="number" name="x">
        </p>
        <input type="submit" value="Calcular">
    </form>

    <?php
    $valor = $_GET["x"];

    $resultado = sqrt($valor);

    echo "<p>A raíz quadrada de $valor é igual a $resultado.</p>";
    ?>
</body>
</html>
 