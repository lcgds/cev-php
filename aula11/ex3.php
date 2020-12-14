<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 11</h1>
    <h2>Estrutura de Repetição While</h2>

    <h3>Exercicio 3</h3>
    <p>Criar um contado personalizável.</p>
    
    <form method="POST" action="ex3.php">
        <label for="inicio">Início: </label>
        <input name="inicio" type="number" min="1" max="100" value="1">

        <label for="fim">Fim: </label>
        <input name="fim" type="number" min="1" max="100" value="10">
        <br>

        <label for="incremento">Incremento: </label>
        <select name="incremento">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>

        <input type="submit" value="Contar">
    </form>

    <br>
    <hr>

    <ul>
        <?php
            $inicio = $_POST['inicio'];
            $fim = $_POST['fim'];
            $incremento = $_POST['incremento'];

            if($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "<li>$inicio</li>";
                    $inicio = $inicio + $incremento;
                }
            } else {
                echo "<li>Valores de ínicio e fim inválidos!</li>";
            }
            
        ?>
    <ul>

</body>

</html>