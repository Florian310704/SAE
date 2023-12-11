<?php
//include '../Controller/ControllerVerificationDroit.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminEntreprise.css">
</head>
<body class="body">

<header class="header">
    <div class="menu-container">
        <div class="menu-header">
            <nav>
                <form  method="post" action="../Controller/ControllerBtnDeco.php">
                    <ul class="vertical-menu">
                        <li><button type="button" onclick="window.location.href ='ViewSMain.php'" name="accueil" class="btnCreation"> Accueil </button></li>
                        <li><button type="button" onclick="window.location.href ='ViewSEtudiant.php'" name="etudiant" class="btnCreation"> Étudiant </button></li>
                        <li><button type="button" onclick="window.location.href ='ViewSEntreprise.php'" name="entreprise" class="btnCreation"> Entreprise </button> </li>
                        <li> <button type="submit" name="deco" class="btnCreation"> Déconnexion </button> </li>
                    </ul>
                </form>
            </nav>
        </div>

        <div class="header-content">
            <h1 class="title">Gestionnaire des apprentis</h1>
            <img src="../asserts/img/logo.png" class="logo">
            <form method="post" action="../Controller/ControllerBtnDeco.php">
                <input class="btnDeco" value="Déconnexion" type="submit" name="btnDeco">
            </form>
        </div>
    </div>
</header>

<div class="body-container">

    <div class="rectangle-haut">
        <div class="all-text">
            <h3 class="nbrEtu">Nombre d'étudiants</h3>
            <h3 class="nbrEnt">Nombre d'entreprises</h3>
            <h3 class="nbrOff">Nombre d'offres</h3>
            <h3 class="nbrPers">Nombre de personnel</h3>
        </div>
    </div>

    <div class="rectangle-mid">
        <form action="" method="post">
            <button name="btnAjoutEntreprise" onclick="window.location.href ='ViewAjoutEntreprise.php'" class="btnAjoutEntreprise" type="button">Ajouter une entreprise</button>
            <button name="btnAjoutOffre" onclick="window.location.href ='ViewDemandeAjoutOffre.php'" class="btnAjoutOffre" type="button">Ajouter une offre</button>
        </form>

        <form method="post" action="">
            <input type="button" value="Afficher les Offres" name="btnAfficherOffre" class="btnAfficherOffre" onclick="afficherOffres()">
            <input type="button" value="Afficher les Entreprises" name="btnAfficherEntreprise" class="btnAfficherEntreprise" onclick="afficherEntreprises()">
        </form>

        <ul id="donneesOffre" class="offres-container">
            <form id="rechercheOffre">
                <label for="nomCheckbox">
                    <input type="checkbox" id="nomCheckbox"> Nom
                </label>
                <label for="domaineCheckbox">
                    <input type="checkbox" id="domaineCheckbox"> Domaine
                </label>
                <label for="missionCheckbox">
                    <input type="checkbox" id="missionCheckbox"> Missions
                </label>
                <label for="nbEtudiantCheckbox">
                    <input type="checkbox" id="nbEtudiantCheckbox"> Nombre d'étudiants recherchés
                </label>



                <div id="nomDiv" style="display: none">
                    <label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Nom">
                </div>
                <div id="domaineDiv" style="display: none">
                    <label for="domaine"></label><input type="text" name="domaine" id="domaine" placeholder="Domaine">
                </div>
                <div id="missionDiv" style="display: none">
                    <label for="mission"></label><input type="text" name="mission" id="mission" placeholder="Missions">
                </div>
                <div id="nbEtudiantDiv" style="display: none">
                    <label for="nbEtudiant"></label><input type="number" name="nbEtudiant" id="nbEtudiant" placeholder="Nombre d'étudiants">
                </div>

                <input type="button" value="Rechercher une offre" onclick="rechercherOffres()">
            </form>

            <ul id="resultatsOffre" class="result">
            </ul>

            <script src="../asserts/js/rechercheOffre.js"></script>
        </ul>

        <ul id="donneesEntreprise" class="affichEntreprise">
            <form id="rechercheEntreprise">
                <label for="nomEntrepriseCheckbox">
                    <input type="checkbox" id="nomEntrepriseCheckbox"> Nom
                </label>
                <label for="villeCheckbox">
                    <input type="checkbox" id="villeCheckbox"> Ville
                </label>
                <label for="codepostalCheckbox">
                    <input type="checkbox" id="codepostalCheckbox"> Code Postal
                </label>
                <label for="secteurActiviteCheckbox">
                    <input type="checkbox" id="secteurActiviteCheckbox"> Secteur d'activité
                </label>

                <div id="nomEntrepriseDiv" style="display: none">
                    <label for="nomEntreprise"></label><input type="text" name="nomEntreprise" id="nomEntreprise" placeholder="Nom">
                </div>
                <div id="villeDiv" style="display: none">
                    <label for="ville"></label><input type="text" name="ville" id="ville" placeholder="Ville">
                </div>
                <div id="codepostalDiv" style="display: none">
                    <label for="codepostal"></label><input type="text" name="codepostal" id="codepostal" placeholder="Code Postal">
                </div>
                <div id="secteurActiviteDiv" style="display: none">
                    <label for="secteurActivite"></label><input type="text" name="secteurActivite" id="secteurActivite" placeholder="Secteur d'activité">
                </div>

                <input type="button" value="Rechercher une entreprise" onclick="rechercherEntreprises()">
            </form>

            <ul id="resultatsEntreprise" class="result">
            </ul>
        </ul>
    </div>
</div>

<div id="popup" class="popup">
    L'offre a été ajoutée avec succès !
</div>

<script>
    // ... (Votre script JavaScript existant)
</script>

</body>
</html>



