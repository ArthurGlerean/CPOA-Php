<?php

    $all = 1;
    $montres = 0;
    $chaines = 0;
    $bracelets = 0;
    $bagues = 0;
    $erreur_ajout_panier="";
    include_once("./lib/connectDb.php");
    include_once("./lib/ajout_panier.php");
    include_once("./lib/read_clob.php");
    require_once("./modeles/m_produits.php");


    if(isset($_POST["submitFilter"])){
        if($_POST["select_categorie"] == "-Catégorie-"){
            $all=1;
        }
        if($_POST["select_categorie"] == "Montres"){
            $all = 0;
            $montres=1;
        }
        if($_POST["select_categorie"] == "Chaines"){
            $all = 0;
            $chaines=1;
        }
        if($_POST["select_categorie"] == "Bracelets"){
            $all = 0;
            $bracelets=1;
        }
        if($_POST["select_categorie"] == "Bagues"){
            $all = 0;
            $bagues=1;
        }
    }
    if(isset($_POST["submitProduit"])){
        if($_SESSION["isConnected"] == 0 || $_SESSION["isConnected"] == 2){
            $erreur_ajout_panier.="<p class='erreur_ajout_panier'>Vous devez être connecté pour pouvoir ajouter un produit au panier !</p>";
        }
        else{
            ajout_panier($bdd,$_SESSION["id_user"],$_POST["ref_produit"]);
        }
        
    }
     require_once("./vues/v_produits.php");
    
    
?>