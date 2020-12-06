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
        br {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Aula 10</h1>
    <h2>Estrutura Condicional Switch</h2>

    <h3>Exercicio 3</h3>
    <p>Ler o Estado e mostrar a qual região do país ele pertence.</p>

    <form method="GET" action="ex3.php">
        <label for="uf">Selecione um Estado: </label>
        <select name="uf" autofocus required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select>
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        $estado = $_GET["uf"];

        switch ($estado) {
            case "AM":
            case "RR":
            case "AP":
            case "PA":
            case "TO":
            case "RO":
            case "AC":
                echo "<p>Este estado pertence à Região Norte.</p>";
            break;
            case "MA":
            case "PI":
            case "CE":
            case "RN":
            case "PE":
            case "PB":
            case "SE":
            case "AL":
            case "BA":
                echo "<p>Este estado pertence à Região Nordeste.</p>";
            break;
            case "MT":
            case "MS":
            case "GO":
                echo "<p>Este estado pertence à Região Centro-Oeste.</p>";
            break;
            case "SP":
            case "RJ":
            case "ES":
            case "MG":
                echo "<p>Este estado pertence à Região Sudeste.</p>";
            break;
            case "PR":
            case "RS":
            case "SC":
                echo "<p>Este estado pertence à Região Sul.</p>";
            break;
        }
    ?>
</body>

</html>