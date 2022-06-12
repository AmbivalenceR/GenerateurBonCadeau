<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Générateur de bon cadeau</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body>
    <header>
        <h1>Créer votre bon cadeau</h1>
    </header>
    <main>
        <form action="bonCadeau.php" method="post">
            <div class="divForm labelEtInput">
                <label for="valeur">Valeur du bon cadeau : </label>
                <input type="number" name="valeur" id="valeur" placeholder="Valeur du bon cadeau" value="500">
            </div>
            <div class="divForm labelEtInput">
                <label for="beneficiaire">Bénéficiaire : </label>
                <input type="text" name="beneficiaire" id="beneficiaire" placeholder="Prénom et Nom du bénéficiaire" value="Béné">
            </div>
            <div class="divForm labelEtInput">
                <label for="offrant">Offrant : </label>
                <input type="text" name="offrant" id="offrant" placeholder="Votre nom" value="Joffre">
            </div>
            <p>Date du bon cadeau</p>
            <div class="divForm selectDate">
                <div class="labelEtSelect">
                    <label for="mois">Mois : </label>
                    <select name="mois" id="mois" id="mois">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="labelEtSelect">
                    <label for="annee">Année : </label>
                    <select name="annee" id="annee" id="annee">
                        <option value="<?= date("Y"); ?>"><?= date("Y"); ?></option>
                        <option value="<?= date("Y") + 1; ?>"><?= date("Y") + 1; ?></option>
                    </select>
                </div>
            </div>
            <input class="button" type="submit" value="Créer le bon cadeau">
        </form>
    </main>
    <footer>
        <small>Copyright : Ambivalence 2022</small>
    </footer>
</body>

</html>