<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 5</h1>
    <h2>Funções matemáticas</h2>

    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo 
        "
        <p>Considerando os números $n1 e $n2, vejamos o resultado das funções de:</p>
        <ul>
            <li>Valor absoluto: " .  abs($n1) . " e " . abs($n2) . "</li>
            <li>Potenciação: " .  pow($n1, $n2) . "</li>
            <li>Raiz quadrada: " .  sqrt($n1) .  " e " . sqrt($n2) . "</li>
            <li>Arredondamento: " .  round($n1) .  " e " . round($n2) . "</li>
            <li>Parte inteira: " .  intval($n1) .  " e " . intval($n2) . "</li>
            <li>Formatção de número: " .  number_format($n1,2,",",".") .  " e " . number_format($n2,2,",",".") . "</li>
        </ul>
        ";
    ?>
</body>

</html>