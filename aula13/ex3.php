<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 13</h1>
    <h2>Estrutura de Repetição For</h2>

    <h3>Exercicio 3</h3>
    <p>Verificar se o número digitado pelo usuário é primo.</p>

    <br>
    
    <hr>
 
    <br>

    <form method="POST" action="ex3.php">
        <fieldset>
            <legend>Verificador de números primos</legend>

            <label for="number">Digite um número para verificar se é primo:</label>
            <input name="number" type="number" min="1" max="1000" value="1">
            <br>

            <input type="submit" value="Verificar">
        </fieldset>
    </form>
    <br>
    
    <hr>
 
    <br>

    <?php
        $num = isset($_POST['number'])?$_POST['number']:2;

        echo "<p>Número escolhido: $num.</p>";

        echo "<p>Múltiplos encontrados:";

        for ($i = $num; $i >= 1; $i--) {
            if ($num % $i == 0) {
                $multiplos++;
                echo " $i";
            }
        }

        echo ".</p>";

        echo "<p>Total de múltiplos: $multiplos.</p>";

        echo "<p>Resultado: ";

        if ($multiplos == 2) {
            echo "$num é um número primo!</p>";
        } else {
            echo "$num não é um número primo!</p>";
        }
    ?>
</body>

</html>