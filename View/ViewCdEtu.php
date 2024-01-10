<?php include '../Controller/ControllerVerificationDroit.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminEtu.css">
</head>
<body class="body">

<header class="header">
    <div class="menu-container">
        <div class="menu-header">
            <nav>
                <form  method="post" action="../Controller/ControllerBtnDeco.php">
                    <ul class="vertical-menu">
                        <li><button type="button" onclick="window.location.href ='ViewCdMain.php'" name="accueil" class="btnCreation"> Accueil </button></li>
                        <li><button type="button"  onclick="window.location.href ='ViewCdEtu.php'" name="etudiant"  class="btnCreation"> Etudiant </button></li>
                        <li><button type="button" onclick="window.location.href ='ViewCdEntreprise.php'" name="entreprise" class="btnCreation"> Entreprise </button> </li>
                        <li><button type="button" onclick="window.location.href ='ViewAdminAdministration.php'" name="administration"  class="btnCreation"> Administration </button> </li>
                        <li> <button type="submit" name="deco" class="btnCreation"> Déconnexion </button> </li>
                    </ul>
                </form>
            </nav>
        </div>

        <div class="header-content">
            <h1 class="title">Gestionnaire des apprentis</h1>
            <img src="../asserts/img/logo.png" class="logo" alt="logo uphf">
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
            <h3 class="nbrPers">Nombre de personnels</h3>
        </div>
    </div>

    <div class="rectangle-mid">
        <form

                method="post">
            <button name="btnAjoutEtu" onclick="window.location.href ='ViewAjoutEtudiant.php'" class="btnAjoutEtu" type="button" >  Ajouter </button>
        </form>

        <form id="rechercheForm">
            <label for="nomCheckbox">
                <input type="checkbox" id="nomCheckbox"> Nom
            </label>
            <label for="prenomCheckbox">
                <input type="checkbox" id="prenomCheckbox"> Prénom
            </label>
            <label for="ineCheckbox">
                <input type="checkbox" id="ineCheckbox"> INE
            </label>
            <label for="emailCheckbox">
                <input type="checkbox" id="emailCheckbox"> Adresse Email
            </label>
            <label for="villeCheckbox">
                <input type="checkbox" id="villeCheckbox"> Ville
            </label>
            <label for="adresseCheckbox">
                <input type="checkbox" id="adresseCheckbox"> Adresse
            </label>
            <label for="codepostalCheckbox">
                <input type="checkbox" id="codepostalCheckbox"> Code Postal
            </label>
            <label for="formationCheckbox">
                <input type="checkbox" id="formationCheckbox"> Formation
            </label>
            <label for="anneeEtudeCheckbox">
                <input type="checkbox" id="anneeEtudeCheckbox"> Année d'étude
            </label>
            <label for="typeEntrepriseCheckbox">
                <input type="checkbox" id="typeEntrepriseCheckbox"> Type d'entreprise
            </label>
            <label for="typeMissionCheckbox">
                <input type="checkbox" id="typeMissionCheckbox"> Type de missions
            </label>
            <label for="mobileCheckbox">
                <input type="checkbox" id="mobileCheckbox"> Mobile
            </label>
            <label for="actifCheckbox">
                <input type="checkbox" id="actifCheckbox"> Actif
            </label>



            <div id="nomDiv" style="display: none">
                <label for="nom"></label><input type="text" name="nom" id="nom" placeholder="Nom">
            </div>
            <div id="prenomDiv" style="display: none">
                <label for="prenom"></label><input type="text" name="prenom" id="prenom" placeholder="Prénom">
            </div>
            <div id="ineDiv" style="display: none">
                <label for="ine"></label><input type="text" name="ine" id="ine" placeholder="INE">
            </div>
            <div id="emailDiv" style="display: none">
                <label for="email"></label><input type="text" name="email" id="email" placeholder="Adresse Email">
            </div>
            <div id="villeDiv" style="display: none">
                <label for="ville"></label><input type="text" name="ville" id="ville" placeholder="Ville">
            </div>
            <div id="adresseDiv" style="display: none">
                <label for="adresse"></label><input type="text" name="adresse" id="adresse" placeholder="Adresse">
            </div>
            <div id="codepostalDiv" style="display: none">
                <label for="codepostal"></label><input type="number" name="codepostal" id="codepostal" placeholder="Code Postal">
            </div>
            <div id="formationDiv" style="display: none">
                <label for="formation"></label><input type="text" name="formation" id="formation" placeholder="Formation">
            </div>
            <div id="anneeEtudeDiv" style="display: none">
                <label for="anneeEtude"></label><input type="number" name="anneeEtude" id="anneeEtude" placeholder="Année d'étude">
            </div>
            <div id="typeEntrepriseDiv" style="display: none">
                <label for="typeEntreprise"></label><input type="text" name="typeEntreprise" id="typeEntreprise" placeholder="Type d'entreprise">
            </div>
            <div id="typeMissionDiv" style="display: none">
                <label for="typeMission"></label><input type="text" name="typeMission" id="typeMission" placeholder="Type de missions">
            </div>
            <div id="mobileDiv" style="display: none">
                <label for="mobile">
                    <input type="checkbox" name="mobile" id="mobile"> Mobile
                </label>
            </div>
            <div id="actifDiv" style="display: none">
                <label for="actif">
                    <input type="checkbox" name="actif" id="actif"> Actif
                </label>
            </div>

            <input type="button" value="Rechercher un étudiant" onclick="rechercherEtudiants()">
        </form>

        <script src="../asserts/js/rechercheEtu.js"></script>

        <ul id="resultats" class="result">
            <!-- Les résultats seront affichés ici -->
        </ul>
        <!-- Affichage des résultats -->

    </div>
</div>



</body>
</html>
