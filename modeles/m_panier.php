<?php
    $panier = 0;
    $nb_articles = 1;

    //query pour afficher le panier 
    $query_paniers = oci_parse($bdd, 'Select ID_PANIER From PANIER where ID_UTILISATEUR_PANIER = :n_utilisateur');
    oci_bind_by_name($query_paniers, ':n_utilisateur', $_SESSION["id_user"]);
    oci_execute($query_paniers); 
    oci_fetch($query_paniers);
    $ref_panier = oci_result($query_paniers, 'ID_PANIER');

    //query pour afficher les produits avec détails du panier
    function afficher_articles($ref_panier){
        $query_produits = oci_parse($bdd, 'Select * from LIGNE_PRODUIT where PANIER_ID = :n_panier');
        oci_bind_by_name($query_produits, ':n_panier', $ref_panier);
        oci_execute($query_produits);
        
        while (($row = oci_fetch_array($bdd,$query_produits, OCI_BOTH)) != false) {
            $ref_article = $row["ID_PRODUIT"];

            //requête pour récupérer le nom et le prix du produit $ref_article
            $query_articles = oci_parse($bdd, 'Select * from PRODUITS where IDPRODUIT = :n_produit');
            oci_bind_by_name($query_articles, ':n_produit', $ref_article);
            oci_execute($query_articles);
            oci_fetch($query_articles);
            echo oci_result($query_articles,"LIBELLE") . " prix= " . oci_result($query_articles,"PRIX") . "<br>";
        }
    }

    oci_close($bdd);
?>