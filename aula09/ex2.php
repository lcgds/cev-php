<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 9</h1>
    <h2>Estrutura Condicional if</h2>

    <h3>Exercicio 2</h3>

    <form method="POST" action="ex2.php">
        <label for="n1">Nota 1: </label>
        <input type="number" name="n1" required>
        <br>

        <label for="n2">Nota 2: </label>
        <input type="number" name="n2" required>
        <br>

        <input type="submit" value="Calcular média">
    </form>

    <?php
        /*
            0 a 5 - Reprovado
            5 a 7 - Em recuperação
            7 a 10 - Aprovado

            A média entre * e * é *. Situação do aluno é: *.
        */

        $nota1 = $_POST["n1"]; //echo "<p>$nota1</p>";
        $nota2 = $_POST["n2"]; //echo "<p>$nota2</p>";

        $media = ($nota1 + $nota2) / 2; //echo "<p>$media</p>";

        echo "<p>Considerando as notas $nota1 e $nota2, a média do aluno é $media. ";

        if ($media < 5) {
            echo "Assim sendo, este aluno está reprovado.</p>";
        } else if ($media < 7) {
            echo "Assim sendo, este aluno está em recuperação.</p>";
        } else {
            echo "Assim sendo, este aluno está aprovado.</p>";
        }
    ?>
</body>

</html>