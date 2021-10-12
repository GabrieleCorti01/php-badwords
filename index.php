
<?php
    
    $text = "In una terra lontana, dietro le montagne Parole, lontani dalle terre di Vocalia e Consonantia, vivono i testi casuali. Vivono isolati nella cittadina di Lettere, sulle coste del Semantico, un immenso oceano linguistico. Un piccolo ruscello chiamato Devoto Oli attraversa quei luoghi, rifornendoli di tutte le regolalie di cui hanno bisogno. ";
    $badwords = $_GET["censore"];
    $text = str_replace($badwords,"***",$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizo php!ß</title>
</head>
<body>

<h1>Inserisci: censore= "parola che vuoi censurare" all'interno dell'url per censurare una parola a tua scelta</h1>



<p>
    <?php echo $text . strlen($text) ?>
</p>


    
</body>
</html>