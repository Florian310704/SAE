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
                <form action="../Controler/controlerAdminEtu.php" method="post">
                    <ul class="vertical-menu">
                        <li><input type="submit" name="accueil" value="Accueil" class="btnCreation"></li>
                        <li><input type="submit" name="etudiant" value="Etudiant" class="btnCreation"></li>
                        <li><input type="submit" name="entreprise" value="Entreprise" class="btnCreation"></li>
                        <li><input type="submit" name="adminitrsation" value="Administration" class="btnCreation"></li>
                    </ul>
                </form>
            </nav>
        </div>

        <div class="header-content">
            <h1 class="title">Gestionnaire des apprentis</h1>
            <img src="../asserts/img/logo.png" class="logo">
            <form method="post" action="../Controler/controlerBtnDeco.php">
                <input class="btnDeco" value="Déconnexion" type="submit" name="btnDeco">
            </form>
        </div>
    </div>
</header>

<div class="body-container">
    <div class="rectangle-haut">
        <div class="all-text">
            <h3 class="nbrEtu">Nombre d'étudiant</h3>
            <h3 class="nbrEnt">Nombre d'entreprise</h3>
            <h3 class="nbrOff">Nombre d'offre</h3>
            <h3 class="nbrPers">Nombre de personnel</h3>
        </div>
    </div>

    <div class="rectangle-mid">
        <form action="../Controler/controlerBtnAjout.php" method="post">
            <input name="btnAjoutEtu" class="btnAjoutEtu" type="submit" value="Ajouter un étudiant">
        </form>

        <form id="rechercheForm">
            <input type="text" name="nom" id="nom" placeholder="Nom">
            <input type="text" name="prenom" id="prenom" placeholder="Prénom">
            <input type="text" name="ine" id="ine" placeholder="INE">
            <input type="text" name="ville" id="ville" placeholder="Ville">
            <input type="text" name="codepostal" id="codepostal" placeholder="Code Postal">
            <input type="text" name="formation" id="formation" placeholder="Formation">

            <input type="button" value="Rechercher un étudiant" onclick="rechercherEtudiants()">
        </form>
        <ul id="resultats" class="result">
            <!-- Les résultats seront affichés ici -->
        </ul>
        <!-- Affichage des résultats -->

    </div>
</div>

<script src="../asserts/js/rechercheEtu.js"></script>



</body>
</html>
