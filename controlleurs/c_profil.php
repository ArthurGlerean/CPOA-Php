<?php
    include_once("./lib/connectDB.php");


    require_once("./modeles/m_profil.php");
    if(isset($_GET["action"]) && $_GET["action"] == "deconnexion") {  // si l'utilisateur clique sur le bouton déconnexion
        $_SESSION["isConnected"] = 0;   // on détruit la session
        $_SESSION["id_user"] = 0;   // on détruit l'id de l'utilisateur
        $_SESSION["username"] = "";  // on détruit le nom de l'utilisateur
        $_SESSION["email_user"] = "";   // on détruit l'email de l'utilisateur

        require_once("./controlleurs/c_home.php");   // on redirige vers la page d'accueil
    }else{
        require_once("./vues/v_profil.php");
    }

?>