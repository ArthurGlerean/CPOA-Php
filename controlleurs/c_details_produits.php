<?php
    $nb_commentaires=0;
    include_once("./lib/connectDB.php");
    include_once("./lib/afficher_images_produit2.php");
    include_once("./lib/read_clob.php");


    
    require_once("./modeles/m_details_produits.php"); 
    require_once("./vues/v_details_produits.php");  //on appelle la vue pour afficher les détails du produit

?>