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

    <h3>Exercicio 1</h3>
    <p>Ler um número e qual operação realizar: dobro, cubo ou raiz quadrada.</p>

    <form method="POST" action="ex1.php">
        <label for="no">Número: </label>
        <input type="number" autofocus name="no">
        <br>

        <p>Selecione uma operação: </p>

        <input type="radio" name="op" value="dobro" required>
        <label for="dobro">Dobro</label>

        <input type="radio" name="op" value="cubo">
        <label for="cubo">Cubo</label>

        <input type="radio" name="op" value="raizQuadrada">
        <label for="raizQuadrada">Raíz Quadrada</label>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        $no = $_POST["no"];
        $op = $_POST["op"];
        
        switch ($op) {
            case "dobro":
                $equacao =  $no . "²";
                $resultado = pow($no, 2);
                break;
            case "cubo":
                $equacao =  $no . "³";
                $resultado = pow($no, 3);
                break;
            case "raizQuadrada":
                $equacao = "√" . $no;
                $resultado = sqrt($no);
                break;
        }

        echo "<p>$equacao = $resultado.</p>";
    ?>
</body>

</html>