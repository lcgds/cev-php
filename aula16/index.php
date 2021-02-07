<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 16</h1>
    <h2>Funções String</h2>

    <h3>Função printf</h3>
        <p>Imprime um texto formatado.</p>
        <?php
            $preco = 4.5;
            printf("O leite está custando R$ %.2f", $preco);
        ?>

    <h3>Função printr</h3>
        <p>Imprime uma variável (ex.: vetor) de forma legível.</p>
        <?php
            $vetor[0] = 4;
            $vetor[1] = 3;
            $vetor[2] = 8;
            
            print_r($vetor);

            var_dump($vetor);
            var_export($vetor);
        ?>

    <h3>Função wordwrap</h3>
        <p>Cria quebras de linha para alinhar o texto.</p>
        <?php
            $texto = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse beatae eligendi minus, dolor aliquam nam optio explicabo doloribus laudantium est ducimus, laboriosam debitis saepe dolorem inventore possimus. Voluptatem, dolores omnis?";
            $resultado = wordwrap($texto, 40, "<br/>\n", true);
            echo($resultado);
        ?>

    <h3>Função strlen</h3>
        <p>Exibe a quantidade de caracteres em uma string.</p>
        <?php
            $string = "Palavras muito grandes";
            echo($string . " = " . strlen($string) . " caracteres");
        ?>

    <h3>Função trim</h3>
        <p>Elimina espaços desnecessários de uma string.</p>
        <?php
            $nome = "      Luiz Carlos Garrido de Souza      ";
            echo($nome . " = " . strlen($nome) . " caracteres (sem trim).<br/>");
            echo($nome . " = " . strlen(trim($nome)) . " caracteres (com trim).<br/>");
        ?>

    <h3>Função str_word_count</h3>
        <p>Exibe a quantidade de palavras em uma string.</p>
        <?php
            echo(str_word_count("Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium corporis dolorum vel qui fugiat."));
        ?>    

    <h3>Função explode</h3>
        <p>Separa uma string, explodindo (excluindo) o que for setado.</p>
        <?php
            $site = "Curso em Vídeo";
            $vetor = explode(" ", $site);
            print_r($vetor);
        ?>

    <h3>Função str_split</h3>
        <p>Separa cada letra em uma string.</p>
        <?php
            $nome = "Maria";
            $vetor = str_split($nome);
            print_r($vetor);
        ?>

    <h3>Função join</h3>
        <p>Imprime um texto formatado.</p>
        <?php
            $vetor = [1, 2, "feijão com arroz", 3, 4, "feijão no prato", 5, 6, "molho inglês", 7, 8, "comer biscoito", 9, 10, "comer pastéis"];

            $cancao = join(" ", $vetor);

            print($cancao);
        ?>

    <h3>Função chr</h3>
        <p>Imprime um caractere específico baseado em seu código ASCII.</p>
        <?php
            $letra = chr(69);
            echo("A letra de código 69 é " . $letra . ".");
        ?>
    <h3>Função ord</h3>
        <p>Imprime um código ASCII baseado em um caractere específico.</p>
        <?php
            $letra = "L";
            $ascii = ord($letra);
            echo($letra . " em ASCII equivale a: " . $ascii);
        ?>
    <a href="../">
        <input type="button" value="Voltar para o início">
    </a>
</body>

</html>