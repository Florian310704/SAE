
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="asserts/css/adminEtu.css">
</head>
<body class="body">

<header class="header">
    <div class="menu-container">
        <div class="menu-header">
            <nav>
                <form action="Controler/controlerAdminEtu.php" method="post">
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
            <img src="asserts/img/logo.png" class="logo">
        </div>
    </div>
</header>


<div class="body-container">

    <div class="rectangle-haut">

        <div class="all-text">

            <h3 class = "nbrEtu">Nombre d'étudiant</h3>

            <h3 class = "nbrEnt">Nombre d'entreprise</h3>

            <h3 class = "nbrOff">Nombre d'offre</h3>

            <h3 class = "nbrPers">Nombre de personnel</h3>

        </div>

    </div>

    <div class="rectangle-mid">

        <ul>
            <?php
            session_start();

            $host = "localhost";
            $dbname = "postgres";
            $user = "postgres";
            $password = "31lion2004";

            try {
                $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }

            if (isset($_POST["select_course"])) {
                $_SESSION["selected_course_id"] = $_POST["selected_course_id"];
            }

            $sql = "SELECT * FROM etudiant";
            $req = $pdo->prepare($sql);
            $req->execute();

            $resultat = $req->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultat as $res): ?>

                    Nom : <?php echo $res['nom']; ?><br>
                    Prénom : <?php echo $res['prenom']; ?><br>
                    INE : <?php echo $res['ine']; ?><br>
                    Formation : <?php echo $res['formation']; ?> km<br>
                    Date de naissance : <?php echo $res['datedenaissance']; ?><br>
                    Année : <?php echo $res['anneeetude']; ?><br>
                    Email : <?php echo $res['email']; ?><br>
                    Actif : <?php echo $res['actif']; ?><br>



            <?php endforeach; ?>
        </ul>

        <form action="Controler/controlerBtnAjout.php" method="post">

            <input name="btnAjoutEtu" class="btnAjoutEtu" type="submit" value="Ajouter">

        </form>

    </div>


</div>



</body>
</html>

