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
            <?php    
            $numero = $_GET["numero"];
            $numeroFormatado = number_format($numero,3,',','.');
            echo '<p> Analisando o número <strong>'. $numeroFormatado .'</strong> informado pelo usuário: </p>'; 
            echo '<li> A parte inteira do número é <strong>' . floatval($numeroFormatado) . '</strong></li>';
            echo '<li> A parte fracionário do número é '; 
            echo '<strong>' . 0 ."," . substr($numeroFormatado,strpos($numeroFormatado,",")+ 1) . '</strong>';
            ?>
        </form>
      
    </main>
</body>

</html>

