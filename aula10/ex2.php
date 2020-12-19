<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 10</h1>
    <h2>Estrutura Condicional Switch</h2>

    <h3>Exercicio 2</h3>
    <p>Ler o dia da semana e mostrar se precisa ou não ir para escola.</p>

    <form method="GET" action="ex2.php">
        <label for="dia">Selecione o dia da semana: </label>
        <select name="dia" autofocus>
            <option value="1">Segunda-feira</option>
            <option value="2">Terça-feira</option>
            <option value="3">Quarta-feira</option>
            <option value="4">Quinta-feira</option>
            <option value="5">Sexta-feira</option>
            <option value="6">Sábado</option>
            <option value="7">Domingo</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        $dia = $_GET["dia"];

        switch ($dia) {
            case "1":
            case "2":
            case "3":
            case "4":
            case "5":
                echo "<p>Hoje a escola está aberta!</p>";
                break;
            case "6":
            case "7":
                echo "<p>Hoje a escola não está aberta!</p>";
                break;
        }
    ?>
</body>

</html>