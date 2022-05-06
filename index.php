<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$variabileTesto = "Questo è il paragrafo di testo di mia scelta";

$testoLenght = strlen($variabileTesto);

$parolaCensurata = isset ($_GET['testo'] ) ? $_GET['testo'] : '';

$testoCensurato = str_replace($parolaCensurata, '***' , $variabileTesto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWord PHP</title>
</head>
<body>

<p>
    Il testo di base è:
    <?php echo $variabileTesto; ?>
</p>

<p>
    La lunghezza del testo di base è:
    <?php echo $testoLenght; ?>
</p>

<p>
    La parola decisa da censurare è:
    <?php echo $parolaCensurata; ?>
</p>

<p>
    Il testo dopo la censura è:
    <?php echo $testoCensurato; ?>
</p>

    
</body>
</html>

