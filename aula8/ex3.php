<!DOCTYPE html>
<html>
<head>
    <?php
        $texto = $_POST["texto"];
        $tamanho = $_POST["tamanho"];
        $cor = $_POST["cor"];
    ?>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }

        h1 {
            color: blue;
        }

        h2 {
            color: green;
        }
        br {
            margin-bottom: 15px;
        }
        .textoPersonalizado {
            font-size: <?php echo "$tamanho"?>; 
            color: <?php echo "$cor"?>;
        }
    </style>
</head>
<body>
    <h1>Aula 8 - Integração HTML5 + PHP</h1>

    <h2>Exercicio 3</h2>
    <p>Permitir a personalização de um texto através de um formulário.</p>

    <form method="POST" action="ex3.php">
        <label for="texto">Texto:</label>        
        <input type="text" name="texto">
        <br>
        
        <label for="Tamanho">Tamanho:</label>        
        <select name="tamanho">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select>
        <br>

        <label for="cor">Cor:</label>
        <input type="color" name="cor">
        <br>

        <input type="submit" value="Atualizar">
    </form>

    <?php
        

        echo "<p class='textoPersonalizado'>$texto</p>"
    ?>
</body>
</html>
 