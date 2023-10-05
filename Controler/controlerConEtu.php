<?php
error_reporting(E_ALL);
ini_set('display_errors', 2);
require 'ConnexionBDD.php';
session_start();
ob_start();

$conn = conn('localhost', 'postgres', 'postgres', 'admin');

// Récupérer tous les étudiants (adresses email et mots de passe)
$stmt = $conn->prepare("SELECT email,motdepasse  FROM etudiant");
$stmt->execute();
$students = $stmt->fetchall(PDO::FETCH_ASSOC);

// Supprimer les balises HTML et PHP des données postées
$email = htmlspecialchars($_POST['Email'], ENT_QUOTES, 'UTF-8');
$motDePasse = htmlspecialchars($_POST['MotDePasse'], ENT_QUOTES, 'UTF-8');

$authenticated = false;

foreach ($students as $student) {
    if (password_verify($motDePasse, $student['motdepasse'])) {
        $_SESSION['nom'] = $student['email'];
        $authenticated = true;
        break;
    }
}

if ($authenticated && isset($_POST["valider"])) {
    header('Location: ../etu/pageEtu.php');
} else {

        echo "Mot de passe incorrect.";
}

ob_end_flush();