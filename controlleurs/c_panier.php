<?php
    include_once("./lib/connectDB.php");
    include_once("./lib/read_clob.php");
    
    if($_SESSION["isConnected"] == 0 || $_SESSION["isConnected"] == 2){
        require_once("./vues/v_connexion.php");
    }
    else{
        require_once("./modeles/m_panier.php");
        require_once("./modeles/m_produits.php");
        
        if(isset($_POST["panierSubmit"])){
            require_once("./controlleurs/c_paiement.php");
        }else{
            require_once("./vues/v_panier.php");
        }
    }
    
?>