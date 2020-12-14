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

    <h3>Exercicio 2</h3>
    <p>Criar dinamicamente caixas de números em um formulário.</p>
    
    <form method="POST" action="ex2_d.php">
        <?php
            $c = 1;
            $max = $_GET['c'];

            while ($c <= $max) {
                echo "
                    <label for='input$c'>Caixa $c</label>
                    <input type='text' name='input$c'>
                    <br>
                ";
                $c++;
            }

            echo "<input type='number' name='max' value='$max' hidden>";
        ?>
        <input type="submit" value="Guardar valores">
    </form>
    
</body>

</html>