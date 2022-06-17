<?php
    include_once("./lib/connectDB.php");

    if($_SESSION["isConnected"] == 0){
        require_once("./vues/v_erreur_panier.php");
    }
    else{
        require_once("./modeles/m_panier.php");
        require_once("./modeles/m_produits.php");
        require_once("./vues/v_panier.php");
    }
    
?>