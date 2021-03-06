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

    <h3>Exercicio 3</h3>
    <p>Exibir a tabuada de um número escolhido pelo usuários, de 1 a 10.</p>

    <form method="POST" action="ex3.php">
        <fieldset>
            <legend>Tabuada</legend>
            <label>Selecione um número para exibir a tabuada:</label>
            <br>
            <select name="tabuada">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5" selected>5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </fieldset>
        <br>

        <input type="submit" value="Gerar tabuada">
    </form>
    <br>
    
    <hr>

    <?php
        $tabuada = isset($_POST['tabuada'])?$_POST['tabuada']:5;
        $cont = 1;

        do {
            $resultado = $tabuada * $cont;
            echo "<p>$tabuada x $cont = $resultado.</p>";
            $cont++; 
        }  while ($cont <= 10);
    ?>
</body>

</html>