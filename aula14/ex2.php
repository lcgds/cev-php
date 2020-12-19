<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
<h1>Aula 14</h1>
    <h2>Funções em PHP – Parte 1</h2>

    <h3>Exercicio 2</h3>
    <p>Realizar uma soma com múltiplos parâmetros.</p>

    <?php
        function soma() {
            $numeros = func_get_args();
            $total_numeros = func_num_args();

            for ($i = 0; $i < $total_numeros; $i++) {
                $resultado += $numeros[$i];
            }

            return $resultado;
        }

        echo "A soma de 1, 2, 3, 4, 5, 6, 7, 8, 9 e 10 é igual a " . soma(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    ?>
</body>

</html>