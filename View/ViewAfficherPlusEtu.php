<?php
include "../Controller/ControllerVerificationDroit.php"
?>

<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Etudiants</title>
    <link rel="stylesheet" type="text/css" href="../asserts/css/adminMenuTest.css">
    <link rel="stylesheet" type="text/css" href="../asserts/css/AffichageEtudiant.css">
    <script src="../asserts/js/TousEtu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="icon" href="../asserts/img/logo.png" type="image/x-icon">



</head>
<body class="body">


<header class="header">
    <div class="logo-container">
        <img src="../asserts/img/logo.png" class="logo">
    </div>

    <div class="menu-container">
        <nav>
            <form method="post" action="../Controller/ControllerBtnDeco.php">
                <ul class="vertical-menu">
                    <?php
                    if ($_SESSION['role'] === 'admin') {
                        echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'MainTest.php\'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>';
                    }
                    else {
                        echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Main.php\'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>';
                    }
                    ?>
                    <li>
                        <button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Etu.php'" name="etudiant" value="Etudiant" class="btnCreation">Etudiant</button>
                    </li>
                    <li>
                        <button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Entreprise.php'" name="entreprise" value="Entreprise" class="btnCreation">Entreprise</button>
                    </li>
                    <?php
                    if ($_SESSION['role'] === 'admin') {
                        echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Administration.php\'" name="administration" value="Administration" class="btnCreation">Administration</button></li>';
                    }
                    ?>
                    <li id="account-photo">
                        <img id="photo" src="../asserts/img/utilisateur.png" alt="Image de l'utilisateur" class="utilisateur">
                        <div id="account-dropdown">
                            <form method="post" action="../Controller/ControllerBtnDeco.php">
                                <input class="" name="compte" type="submit" value="Mon compte">
                                <input class="" name="deco" type="submit" value="Se déconnecter">

                            </form>

                        </div>
                    </li>
                    <li>
                        <a><img src="../asserts/img/notification.png" alt="Description de l'image" class="notification"></a>
                    </li>
                </ul>
            </form>
        </nav>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var photo = document.getElementById("photo");
            var dropdown = document.getElementById("account-dropdown");

            photo.addEventListener("click", function (event) {
                event.stopPropagation(); // Empêche la propagation du clic à d'autres éléments parents
                dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
            });

            // Ajout d'un écouteur d'événements sur le document pour fermer le menu s'il est ouvert et que l'on clique en dehors
            document.addEventListener("click", function (event) {
                if (dropdown.style.display === "block" && !event.target.closest('#account-photo')) {
                    dropdown.style.display = "none";
                }
            });
        });


    </script>

</header>

<div class="boutons">
    <?php
    if ($_SESSION['role'] === 'admin') {
        echo '<input type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'MainTest.php\'" name="Retour" value="Retour" id="btnRetour">';
    }
    else {
        echo '<input type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Main.php\'" name="Retour" value="Retour" id="btnRetour">';
    }
    ?>
    <input type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Etu.php'" value="Rechercher des étudiants" id="btnRechercherEtu">
</div>
<div  id="etudiants-container" class="etudiants-container"></div>
</body>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section about">
            <h2>À propos de nous</h2>
            <p>Le Gestionnaire des Apprentis est une plateforme dédiée à la gestion des étudiants, des offres et des entreprises pour les programmes d'apprentissage.</p>
        </div>

        <div class="footer-section contact">
            <h2>Contactez-nous</h2>
            <p>Email : communication@uphf.fr</p>
            <p> Université Polytechnique Hauts-de-France - Campus Mont Houy - 59313 Valenciennes Cedex 9 | +33 (0)3 27 51 12 34</p>
        </div>

        <div class="footer-section links">
            <h2>Liens rapides</h2>
            <ul>
                <?php
                if ($_SESSION['role'] === 'admin') {
                    echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'MainTest.php\'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>';
                }
                else {
                    echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Main.php\'" name="accueil" value="Accueil" class="btnCreation">Accueil</button><li>';
                }
                ?>
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Etu.php'" name="etudiant" value="Etudiant" class="btnCreation">Etudiant</button></li>
                <li><button type="button" onclick="window.location.href ='View<?php echo $_SESSION['role']; ?>Entreprise.php'" name="entreprise" value="Entreprise" class="btnCreation">Entreprise</button></li>
                <?php
                if ($_SESSION['role'] === 'admin') {
                    echo '<li><button type="button" onclick="window.location.href =\'View' . $_SESSION['role'] . 'Administration.php\'" name="administration" value="Administration" class="btnCreation">Administration</button></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Gestionnaire des Apprentis | Tous droits réservés</p>
    </div>
</footer>

</html>