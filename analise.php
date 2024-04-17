<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
            Analisando o número <?php        
            $numero = $_GET["numero"];
            $numeroFormatado = number_format($numero,3,',','.');
            echo $numeroFormatado;
            echo "\n";
            echo 'A parte inteira do número é ';
            echo floatval($numeroFormatado);
            echo "\n";
            echo 'A parte fracionário do número é '; 
            echo 0 ."," . substr($numeroFormatado,strpos($numeroFormatado,",")+ 1);
            ?>
        </form>
      
    </main>
</body>

</html>

