<?php
    $erreur_commentaire ="";
    //récupère le nombre de commentaires du produit
    $query_nb_com = oci_parse($bdd, "SELECT NB_COMMENTAIRES FROM PRODUITS WHERE IDPRODUIT = :id_produit");
    oci_bind_by_name($query_nb_com, ":id_produit", $_GET["ref"]);
    oci_execute($query_nb_com);
    oci_fetch($query_nb_com);
    $nb_commentaires = oci_result($query_nb_com, "NB_COMMENTAIRES");

    //on traite le formulaire d'ajout de commentaires.
    if(isset($_POST["submitComment"])){
        //si l'utilisateur est connecté
        if($_SESSION["isConnected"] == 1){
            //Est-ce que l'utilisateur a déjà commenté ce produit ?
            $query_comment_number = oci_parse($bdd, "SELECT COUNT(*) FROM COMMENTAIRES WHERE ID_SOURCE_PRODUIT = :n_id_produit AND ID_SOURCE_UTILISATEUR = :n_id_user");
            oci_bind_by_name($query_comment_number, ":n_id_produit", $_GET["ref"]);
            oci_bind_by_name($query_comment_number, ":n_id_user", $_SESSION["id_user"]);
            oci_execute($query_comment_number);
            $comment_exist = oci_fetch_array($query_comment_number)[0];
            if($comment_exist > 0){ //si l'utilisateur a déjà commenté ce produit (>=1 commentaire)
                $erreur_commentaire.="Vous avez déjà commenté ce produit !";    //on remplie la variable d'erreur
            }
            else{                                                             //si l'utilisateur n'a pas encore commenté ce produit
                //Toutes les étapes sont validées, on peut ajouter le commentaire dans la base de données...
                $query_add_comment = oci_parse($bdd, "INSERT INTO COMMENTAIRES VALUES (:ref_user, :ref_produit, :ref_contenu, :date_poste)");
                oci_bind_by_name($query_add_comment, ":ref_user", $_SESSION["id_user"]);
                oci_bind_by_name($query_add_comment, ":ref_produit", $_GET["ref"]);
                oci_bind_by_name($query_add_comment, ":ref_contenu", $_POST["content_comment"]);
                $date = date('d-m-y');
                oci_bind_by_name($query_add_comment, ":date_poste", $date);
                oci_execute($query_add_comment);
                oci_close($bdd);
            }
        }
        else{                                                              //si l'utilisateur n'est pas connecté
            $erreur_commentaire.= "Vous devez être connecté pour pouvoir poster un commentaire.";
        }
    }

    //on récupère les informations du produit
    $query_produit = oci_parse($bdd, "SELECT * FROM PRODUITS WHERE IDPRODUIT = :n_id");
    oci_bind_by_name($query_produit, ":n_id", $_GET["ref"]);
    oci_execute($query_produit);
    oci_fetch($query_produit);

    oci_close($bdd);                                                  //on ferme la connexion à la base de données

?>