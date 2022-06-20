<?php
    //initialisation des variables erreurs.
    $erreur_inscription='';
    $erreur_connexion='';

    include_once("./lib/connectDB.php");

    //si le formulaire d'inscription a été envoyé
    if(isset($_POST["inscriptionSubmit"])){
        //si le mot de passe et le mot de passe de confirmation ne sont pas identiques
        if($_POST["mdp"] != $_POST["mdp_confirm"]){
            $erreur_inscription.="Erreur de saisie du mot de passe !";  //on remplie l'erreur
        }
        //si l'erreur est vide
        if(empty($erreur_inscription)){
            require_once("./modeles/m_connexion.php");  //on appelle le modele pour inscrire l'utilisateur
        }
    }


    //si le formulaire de connexion a été envoyé
    if(isset($_POST["connexionSubmit"])){
        require_once("./modeles/m_connexion.php");  //on appelle le modele pour se connecter
    }

    //si l'utilisateur est connecté
    if($_SESSION["isConnected"] == 1){
        require_once("controlleurs/c_profil.php");  //on appelle le controlleur pour afficher le profil
    }else{
        require_once("./vues/v_connexion.php");     //sinon on affiche le formulaire de connexion
    }

    
    
?>

