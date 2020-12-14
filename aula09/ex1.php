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

    <h3>Exercicio 1</h3>
    <p>Ler o ano de nascimento de uma pessoa e mostrar se ela já pode ou não votar.</p>

    <form method="GET" action="ex1.php">
        <label for="nascimento">Ano de nascimento: </label>
        <input type="number" name="nascimento">

        <input type="submit" value="Enviar">
    </form>

    <?php 
        $anoDeNascimento = isset($_GET["nascimento"])?$_GET["nascimento"]:1998; //echo "$anoDeNascimento";
        $idade = date("Y") - $anoDeNascimento; //echo "$idade";

        
        if ($idade < 16) {
            echo "<p>Considerando a idade de $idade anos, o voto não é permitido.</p>";
        } else if (($idade <= 17) || ($idade > 65)) {
            echo "<p>Considerando a idade de $idade anos, o voto é facultativo.</p>";
        } else {
            echo "<p>Considerando a idade de $idade anos, o voto é obrigatório.</p>";
        }
    ?>
</body>

</html>