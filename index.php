<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$variabileTesto = "Questo è il paragrafo di testo di mia scelta";

$testoLenght = strlen($variabileTesto);



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
    <?php echo $variabileTesto; ?>
</p>

<p>
    <?php echo $testoLenght; ?>
</p>

    
</body>
</html>

