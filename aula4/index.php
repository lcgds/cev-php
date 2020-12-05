<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
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
    </style>
</head>

<body>
    <h1>Aula 4</h1>

    <?php 
        $nome = "Luiz Carlos";
        $gosto = "natureza";
        $idade = 2020 - 1998;

        echo 
        "
        <h2>Sobre mim</h2>
        <p>Meu nome é $nome, tenho $idade anos e amo $gosto.</p>
        ";
    ?>
</body>

</html>