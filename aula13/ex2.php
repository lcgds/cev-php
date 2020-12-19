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

    <h3>Exercicio 2</h3>
    <p>Exibir a tabuada de um número escolhido pelo usuários, de 1 a 10.</p>

    <form method="POST" action="ex2.php">
        <fieldset>
            <legend>Tabuada</legend>
            <label>Selecione um número para exibir a tabuada:</label>
            <br>
            <select name="tabuada">
                <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </fieldset>
        <br>

        <input type="submit" value="Gerar tabuada">
    </form>
    <br>
    
    <hr>
    <br>
    
    <?php
        $tabuada = isset($_POST['tabuada'])?$_POST['tabuada']:5;
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<p>$tabuada x $i = $resultado";
        }
    ?>
</body>

</html>