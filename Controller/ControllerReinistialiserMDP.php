<?php

include '../Model/ConnexionBDD.php';
include '../Model/ModelReinitialiserMdp.php';
include '../Model/ModelMail.php';
$db = Conn::GetInstance();
setcookie("email", $_POST['email'], time() + 3600, "/");
$verif = array();

if(isset($_POST["envoieCode"])){
    envoieMail($_POST['email'],'supersae59@gmail.com','SAE', 'MDP', 'code');
    $verif = selectCodeEtuWhereEmail($db,$_POST['email']);}

if(isset($_POST["confirmationCode"])){
    $nouveauMDP = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    if (implode($verif)==$_POST["confirmationCode"]){
        reinitialiserMDP($db,$nouveauMDP,$_COOKIE['email']);
        echo 'yess';
    } else {
        echo "mince";
    }
}

echo 'mot de passe reset';

