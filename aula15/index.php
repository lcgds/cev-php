<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 15</h1>
    <h2>Funções em PHP – Parte 2</h2>

    <h3>Passagem por valor</h3>
    <pre>
        
        function teste($x) {
            $x += 2;
            echo $x;
        }

        $n = 3;
        teste($n); //Retorna 5
        echo "$n"; //Retorna 3
    </pre>

    <h3>Passagem por referência</h3>
    <pre>
        
        function teste(&$x) {
            $x += 2;
            echo $x;
        }

        $n = 3;
        teste($n); //Retorna 5
        echo "$n"; //Retorna 5
    </pre>

    <h3><a href="./ex1.php">Exercicio 1</a></h3>

    <h3><a href="./ex2.php">Exercicio 2</a></h3>

    <a href="../">
        <input type="button" value="Voltar para o início">
    </a>
</body>

</html>