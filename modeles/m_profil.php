<?php

    // on récupère les commandes à l'état 4 (commande reçue) de l'utilisateur connecté
    function affiche_commandes_recues($bdd,$id_user) {
        $query_commandes_valides = oci_parse($bdd, "SELECT * FROM COMMANDE WHERE IDUTILISATEUR = :id_user AND ETAT = 4");
        oci_bind_by_name($query_commandes_valides, ":id_user", $id_user);
        oci_execute($query_commandes_valides);
        while (($row = oci_fetch_array($query_commandes_valides, OCI_BOTH)) != false) { 
            echo "<h3> Commande n°".$row["IDCOMMANDE"]."</h3>";
            echo "A été reçu le -> ".$row["DATE_LIVRAISON"] . "</br>";
            echo "Vous a coûté -> ".$row["PRIX"]. " euros</br>";
        }

        oci_close($bdd);
    }
    
    
?>