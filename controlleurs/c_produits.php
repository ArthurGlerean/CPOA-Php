<?php
    $all = 1;
    $montres = 0;
    $chaines = 0;
    $gourmettes = 0;
    $bagues = 0;
    include_once("./lib/connectDb.php");
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
        if($_POST["select_categorie"] == "Gourmettes"){
            $all = 0;
            $gourmettes=1;
        }
        if($_POST["select_categorie"] == "Bagues"){
            $all = 0;
            $bagues=1;
        }
    }
    require_once("./vues/v_produits.php");
?>