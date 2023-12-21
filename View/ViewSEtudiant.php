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
                        <li><button type="button" onclick="window.location.href ='ViewSMain.php'" name="accueil"class="btnCreation"> Acceuil </button></li>
                        <li><button type="button"  onclick="window.location.href ='ViewSEtudiant.php'" name="etudiant"  class="btnCreation"> Etudiant </button></li>
                        <li><button type="button" onclick="window.location.href ='ViewSEntreprise.php'" name="entreprise" class="btnCreation"> Entreprise </button> </li>
                        <li> <button type="submit" name="deco" class="btnCreation"> Déconnexion </button> </li>
                    </ul>
                </form>
            </nav>
        </div>

        <div class="header-content">
            <h1 class="title">Gestionnaire des apprentis</h1>
            <img src="../asserts/img/logo.png" class="logo">

        </div>
    </div>
</header>

<div id="menuBurger" class="menu-burger">
    <div id="closeBtn" class="close-btn" onclick="fermerMenuBurger()">×</div>

    <!-- Contenu du menu -->
    <div class="menu-content">
        <h2>Informations de l'étudiant</h2>
        <p><span id="infoNom"></span></p>
        <p><span id="infoPrenom"></span></p>
        <p><span id="infoIne"></span></p>
        <p><span id="infoDate"></span></p>
        <p><span id="infoAdresse"></span></p>
        <p><span id="infoVille"></span></p>
        <p><span id="infoCP"></span></p>
        <p><span id="infoAnnee"></span></p>
        <p><span id="infoFormation"></span></p>
        <p><span id="infoEmail"></span></p>
        <p><span id="infoActif"></span></p>
        <p><span id="infoTypeEntreprise"></span></p>
        <p><span id="infoTypeMission"></span></p>
        <p><span id="infoMobile"></span></p>

        <button onclick="fermerMenuBurger()">Fermer le menu</button>
    </div>
</div>

<div class="body-container">
    <div class="rectangle-mid">
        <form method="post">
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

            <input type="button" value="Rechercher un étudiant" onclick="rechercherEtudiants()" class="btnRechercheEtu">
        </form>

        <table id="dataTable">
            <thead>
            <tr>
                <th class="colonne">Nom</th>
                <th class="colonne">Prénom</th>
                <th class="colonne">INE</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
</div>

<script src="../asserts/js/rechercheEtu.js"></script>

</body>
</html>