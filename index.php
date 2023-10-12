<?php

$santi = array();
$santi = [
    "dio",
    "madonna",
    "gesu",
    "san pio",
    "san benedetto",
    "signore",
];

$bestemmie = array();
$bestemmie = [
    "porco", "maiale", "stuprato", "smembrato", "mattone", "calcestruzzo", "cammello", "carbonara", "te alla pesca", "maranza", "paletta", "disabile", "elicottero", "giradischi", "faraone", "rastrello", "fulminato", "ratatouille", "angolo retto", "a 90", "otturato", "farfugliante", "birichino"
];

$santiArrayLength = count($santi);
$bestemmieArrayLength = count($bestemmie);

$santiCasualIndex = rand() % $santiArrayLength;
$bestemmieCasualIndex = rand() % $bestemmieArrayLength;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Ringraziamenti al Signore</title>

    <link rel='stylesheet' href='style.css'>
</head>

<body>

    <section>

        <h1>Generatore di Ringraziamenti al Signore</h1>
        <h3>Niente qui è fatto seriamente, prenditela sul ridere :) </h3>


        <div class="generator">
            <span> 
                <?php echo $santi[$santiCasualIndex] ?> 
            </span>
            <span> 
                <?php echo $bestemmie[$bestemmieCasualIndex] ?> 
            </span>
        </div>

        <button class="btn primary" onclick="history.go(0)">
            Rigenera
        </button>

    </section>


</body>

</html>