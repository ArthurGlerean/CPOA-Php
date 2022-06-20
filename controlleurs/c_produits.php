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

    //si le formulaire de filtre a été envoyé
    if(isset($_POST["submitFilter"])){
        if($_POST["select_categorie"] == "-Catégorie-"){    //si l'utilisateur n'a pas sélectionné de catégorie
            $all=1;                                         //on affiche tous les produits
        }
        if($_POST["select_categorie"] == "Montres"){    //si l'utilisateur a sélectionné la catégorie montres
            $all = 0;                                 //on ne affiche pas tous les produits
            $montres=1;                          //on affiche les produits de la catégorie montres
        }
        if($_POST["select_categorie"] == "Chaines"){    //si l'utilisateur a sélectionné la catégorie chaines
            $all = 0;                              //on ne affiche pas tous les produits
            $chaines=1;                             //on affiche les produits de la catégorie chaines
        }
        if($_POST["select_categorie"] == "Bracelets"){
            $all = 0;                           //on ne affiche pas tous les produits
            $bracelets=1;                       //on affiche les produits de la catégorie bracelets
        }
        if($_POST["select_categorie"] == "Bagues"){
            $all = 0;                        //on ne affiche pas tous les produits
            $bagues=1;                      //on affiche les produits de la catégorie bagues
        }
    }


    //si l'utilisateur ajoute un produit au panier
    if(isset($_POST["submitProduit"])){
        if($_SESSION["isConnected"] == 0 || $_SESSION["isConnected"] == 2){ //si l'utilisateur n'est pas connecté
            $erreur_ajout_panier.="<p class='erreur_ajout_panier'>Vous devez être connecté pour pouvoir ajouter un produit au panier !</p>";    //on remplie la variable d'erreur
        }
        else{
            ajout_panier($bdd,$_SESSION["id_user"],$_POST["ref_produit"]);  //on ajoute le produit au panier
        }
        
    }
     require_once("./vues/v_produits.php");     //on affiche les produits
    
    
?>