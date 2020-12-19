<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 6</h1>

    <?php
        echo "<h2>Operadores de atribuição</h2>";
    
        echo 
        "
        <h3>Exercicio 1</h3>
        <p>Aplicar um desconto ao preço de um produto.</p>
        ";

        $preco = $_GET["preco"];
        $preco_formatado = number_format( $_GET["preco"] ,2,",",".");

        $desconto = $_GET["desconto"];

        echo "<p>Preço = R$" . $preco_formatado . ".<p>";
        echo "<p>Desconto = $desconto%.<p>";

        $total = number_format( $preco -= ($preco * ($desconto/100)) ,2,",",".");

        echo "<p>Total = R$" . $total . ".<p>";
    ?>
</body>

</html>