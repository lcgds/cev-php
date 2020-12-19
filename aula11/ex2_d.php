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
    
    <h4>Valores salvos</h4>
    <ol>
        <?php
            $i = 1;
            $c = $_POST['max'];

            while ($i <= $c) {
                $d = $_POST['input' . $i];
                echo "<li>$d</li>";
                $i++;
            }
        ?>
    </ol>

    <a href="ex2_v.html">
        <input type="button" value="Voltar">
    </a>
    
</body>

</html>