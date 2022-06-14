<?php
    if(isset($_POST["inscriptionSubmit"])){
        $query_search = oci_parse($bdd, 'Select * From UTILISATEURS where nom_utilisateur=:n_username');
        oci_bind_by_name($query_search, ':n_username', $_POST["nom_utilisateur"]);
        oci_execute($query_search);

        if( ($nb_users=oci_fetch($query_search)) > 0   ){
            $erreur_inscription.= "cet utilisateur existe déjà!";
        }
        else
        {
            $query_insertion = oci_parse($bdd, "INSERT INTO UTILISATEURS(NOM_UTILISATEUR,MOT_DE_PASSE,MAIL,STATUT) VALUES(:n_username,:n_mdp,:n_mail,'client')");
            oci_bind_by_name($query_insertion, ':n_username', $_POST["nom_utilisateur"]);
            oci_bind_by_name($query_insertion, ':n_mdp', $_POST["mdp"]);
            oci_bind_by_name($query_insertion, ':n_mail', $_POST["email_utilisateur"]);

            oci_execute($query_insertion);
        }
    }

    if(isset($_POST["connexionSubmit"])){
        $query_search2 = oci_parse($bdd, 'Select * From UTILISATEURS where NOM_UTILISATEUR =:n_username');
        oci_bind_by_name($query_search2, ':n_username', $_POST["nom_utilisateur"]);
        oci_execute($query_search2);
        

        if( ($nb_users2=oci_fetch($query_search2)) == 0   ){
            $erreur_connexion.= "utilisateur introuvable.";
        }
        else
        {
            if(oci_result($query_search2, 'MOT_DE_PASSE') != $_POST["mdp"]){
                $erreur_connexion.="mot de passe invalide!";
            }
            else{
                //**on attribue les coordonnées aux variables de SESSION */
                $_SESSION["isConnected"] = 1;
                $_SESSION["username"]=oci_result($query_search2, 'NOM_UTILISATEUR');
                $_SESSION["email_user"]=oci_result($query_search2, 'MAIL');
            }
        }
    }


?>