<?php
    include_once("./lib/connectDB.php");
    include_once("./lib/read_clob.php");
    

    //si l'utilisateur n'est pas connecté
    if($_SESSION["isConnected"] == 0 || $_SESSION["isConnected"] == 2){
        require_once("./vues/v_connexion.php");                             //on affiche le formulaire de connexion
    }
    //si l'utilisateur est connecté
    else
    {
        require_once("./modeles/m_panier.php");                       //on appelle le modele pour afficher le panier
        require_once("./modeles/m_produits.php");                   //on appelle le modele pour afficher les produits du panier
        
        if(isset($_POST["panierSubmit"])){                //si le formulaire de panier a été envoyé (l'utilisateur veut passer commande)
            require_once("./controlleurs/c_paiement.php");      //on appelle le controlleur pour afficher le formulaire de paiement
        }else{
            require_once("./vues/v_panier.php");        //sinon on affiche le panier
        }
    }
    
?>