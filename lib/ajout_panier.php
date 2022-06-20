<?php
    //fonction pour ajouter un produit au panier
    function ajout_panier($bdd,$ref_panier,$ref_produit){
        $query_ajout = oci_parse($bdd, 'Insert into LIGNE_PRODUIT values (:n_panier, :n_produit,1)');
        oci_bind_by_name($query_ajout, ':n_panier', $ref_panier);
        oci_bind_by_name($query_ajout, ':n_produit', $ref_produit);
        oci_execute($query_ajout);
    }