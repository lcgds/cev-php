<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 17</h1>
    <h2>Funções String</h2>

    <h3>Função strtolower e strtoupper</h3>
        
        <?php
            $nome = "Luiz Carlos";
            $nomeLower = strtolower($nome);
            $nomeUpper = strtoupper($nome);
            echo("$nomeLower | $nomeUpper");
        ?>

    <h3>Função ucfirst e ucwords</h3>
        
        <?php
            $nome = "luIz cArlos";
            $nomeUcfirst = ucfirst($nome);
            $nomeUcwords = ucwords($nome);
            echo("$nomeUcfirst | $nomeUcwords");
        ?>
        
    <h3>Função strrev</h3>
        
        <?php
            $nome = "Luiz Carlos Garrido de Souza";
            $nomeStrrev = strrev($nome);
            echo($nomeStrrev);
        ?>

    <h3>Função strpos e stripos</h3>
        
        <?php
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase,'PHP');
            $ipos = stripos($frase,'php');
            echo("A string 'PHP' foi encontrada na posição $pos");
        ?>

    <h3>Função substr_count</h3>
        
        <?php
            $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP");
            echo("PHP encontrado $cont vezes");
        ?>

    <h3>Função substr</h3>
        
        <?php
            $site = "Curso em Vídeo";
            $sub = substr($site, 0,5);
            echo($sub);
        ?>

    <h3>Função str_pad</h3>
        
        <?php
            $nome = "Garrido";
            $novoNome = str_pad($nome, 30, " ", STR_PAD_BOTH);
            echo("O aluno $novoNome é nota 10");
        ?>

    <h3>Função str_repeat</h3>
        
        <?php
            $txt = str_repeat("PHP ", 5);
            print($txt);
        ?>
    
    <h3>Função str_replace</h3>
        
        <?php
            $frase = "Gosto de estudar química!";
            $novaFrase = str_replace("química", "programação", $frase);
            print($novaFrase);
        ?>

    <br>
    <a href="../">
        <input type="button" value="Voltar para o início">
    </a>
</body>

</html>