<!DOCTYPE html>
<html>
<head>
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
    </style>
</head>
<body>
    <h1>Aula 8 - Integração HTML5 + PHP</h1>

    <h2>Exercicio 2</h2>
    <p>Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual.</p>

    <?php
        $nome = $_POST["nome"]; //echo "$nome";
        $anoDeNascimento = $_POST["anoDeNascimento"]; //echo "$anoDeNascimento";
        $sexo = $_POST["sexo"]; //echo "$sexo";

        $tratamento = ($sexo == "masculino")?'meu amigo':'minha amiga';
        $idade = date("Y") - $anoDeNascimento; //echo "$idade";

        echo "<p>Olá, $nome!<br>Estava com saudades de você, $tratamento...<br>Você deve estar com $idade anos agora, não é?</p>";
    ?>
    <a href="./ex2.html">Voltar</a>
</body>
</html>
 