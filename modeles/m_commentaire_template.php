<?php
    include("./lib/connectDB.php");

    //on récupère les commentaires du produit
    $query_commentaires = oci_parse($bdd, "SELECT * FROM COMMENTAIRES c JOIN UTILISATEURS u on c.ID_SOURCE_UTILISATEUR=u.IDENTIFIANT WHERE ID_SOURCE_PRODUIT = :id_produit");
    oci_bind_by_name($query_commentaires, ":id_produit", $_GET["ref"]);
    oci_execute($query_commentaires);

    oci_close($bdd);
?>