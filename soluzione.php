<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords soluzione</title>
</head>
<body>
    <h1>Soluzione: </h1>
    
    <?php 
        $testo = $_GET['paragrafo'];
        $badword = $_GET['bad-word'];
        $replace = '***';
        $testoCensurato = str_replace($badword, $replace, $testo);
    ?>

    <span>Il paragrafo: </span><br>
    <?php echo $testo;
    ?><br>
    <span>La sua lunghezza è di <?php echo strlen($testo); ?> caratteri.</span>
    <hr>
    <span> Il paragrafo censurato: </span><br>
    <?php echo $testoCensurato; ?><br>
    <span>La sua lunghezza è di <?php echo strlen($testoCensurato);?></span>
</body>
</html>