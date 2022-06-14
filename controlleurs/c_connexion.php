<?php
    $erreur_inscription='';
    $erreur_connexion='';
    include_once("./lib/connectDB.php");

    

    if(isset($_POST["inscriptionSubmit"])){
        if($_POST["mdp"] != $_POST["mdp_confirm"]){
            $erreur_inscription.="Erreur de saisie du mot de passe !";
        }
        
        if(empty($erreur_inscription)){
            require_once("./modeles/m_connexion.php");
        }
    }

    if(isset($_POST["connexionSubmit"])){
        require_once("./modeles/m_connexion.php");
        if(empty($erreur_connexion)){
            require_once("./controlleurs/c_profil.php");
        }
        else{
            require_once("./vues/v_connexion.php");
        }
    }
    
?>

