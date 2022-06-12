<?php
require __DIR__ . "/classes/bonCadeauClass.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valeur = $_POST["valeur"];
    $beneficiaire = $_POST["beneficiaire"];
    $offrant = $_POST["offrant"];
    $mois = $_POST["mois"];
    $annee = $_POST["annee"];
    $moisActuel = date("m");
    $anneeActuelle = date("Y");
    $responseCode = 200;

    if ($annee == $anneeActuelle) {
        if ($mois < $moisActuel) {
            $responseCode = 404;
        }
    }


    $newBonKdo = new BonCadeau($valeur, $beneficiaire, $offrant, $mois, $annee);
} ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Générateur de bon cadeau</title>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body>
    <?php if ($responseCode != 200) { ?>
        <header>
            <h3 class='avertissement TitreBonCadeau'>Attention la date que vous avez entré est inferieur à la date d'aujourd'hui. Veuillez entrer une date valide.<h3>
        </header>
        <main>
            <div class='button'>
                <a href='index.php'>Modifier la date</a>
            </div>

        </main>

    <?php } ?>
    <?php if ($responseCode == 200) { ?>
        <header>
            <h2 class="TitreBonCadeau">Votre bon à bien été enregistré, voici les détails du bon cadeau</h2>
        </header>
        <main class="bonCadeau">
            <?= $newBonKdo->afficherBonCadeau() ?>
        </main>

    <?php } ?>
    <footer>
        <small>Copyright : Ambivalence 2022</small>
    </footer>
</body>

</html>