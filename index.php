<?php
    session_start();
    $_SESSION["isConnected"] =(isset($_SESSION["isConnected"])) ? $_SESSION["isConnected"] : 2 ;    //si l'utilisateur s'est déjà connecté (connecté=1;déconnecté=0) alors il prend sa valeur sinon 2.
    $target = (isset($_GET["target"])) ? $_GET["target"] : "home"  ;      //si target= existe dans l'addresse alors prend la valeur de target sinon "home"
    if(file_exists("controlleurs/c_".$target.".php")){   
        require_once("controlleurs/c_".$target.".php");
    }else{
        echo "ERROR 404";
    }
?>
