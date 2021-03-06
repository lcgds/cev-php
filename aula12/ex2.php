<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 12</h1>
    <h2>Estrutura de Repetição Do While</h2>

    <h3>Exercicio 2</h3>
    <p>Script para calcular o fatorial de um número inteiro.</p>

    <form method="GET" action="ex2.php">
        <label for="n">Número</label>
        <input type="number" min="1" max="100" value="1" name="n">
        <br>

        <input type="submit" value="Calcular fatorial">
    </form>
    <br>
    <hr>
    
    <?php
        $num = isset($_GET['n'])?$_GET['n']:10;
        $sub_atual = 1;
        $resultado = $num;

        do {
            $resultado = $resultado * ($num - $sub_atual);
            $sub_atual++;
        } while ($sub_atual != $num);

        echo "!$num = $resultado";
    ?>
</body>

</html>