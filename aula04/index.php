<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
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
    <a href="../">
        <input type="button" value="Voltar para o início">
    </a>
</body>

</html>