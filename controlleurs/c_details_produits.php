<?php
    $nb_commentaires=0;
    include_once("./lib/connectDB.php");



    if(isset($_POST["submitComment"])){
        require_once("./modeles/m_details_produits.php");
    }

    require_once("./vues/v_details_produits.php");

?>