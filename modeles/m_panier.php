<?php
    $panier = 0;
    $nb_articles = 1;

    //query pour chercher le panier de l'utilisateur connecté avec l'identifiant $_SESSION["id_user"] 
    $query_paniers = oci_parse($bdd, 'Select ID_PANIER,PRIX_TOTAL From PANIER where ID_UTILISATEUR_PANIER = :n_utilisateur');
    oci_bind_by_name($query_paniers, ':n_utilisateur', $_SESSION["id_user"]);
    oci_execute($query_paniers); 
    oci_fetch($query_paniers);
    $ref_panier = oci_result($query_paniers, 'ID_PANIER');
    $prix_total = oci_result($query_paniers, 'PRIX_TOTAL');
    //foonction pour afficher les produits avec détails du panier $ref_panier
    function afficher_articles($bdd,$ref_panier){
        $query_produits = oci_parse($bdd, 'Select * from LIGNE_PRODUIT where PANIER_ID = :n_panier');
        oci_bind_by_name($query_produits, ':n_panier', $ref_panier);
        oci_execute($query_produits);
        $prix_total = 0;
        while (($row = oci_fetch_array($query_produits, OCI_BOTH)) != false) {
            $ref_article = $row["ID_PRODUIT"];

            //requête pour récupérer le nom et le prix du produit $ref_article
            $query_articles = oci_parse($bdd, 'Select * from PRODUITS where IDPRODUIT = :n_produit');
            oci_bind_by_name($query_articles, ':n_produit', $ref_article);
            oci_execute($query_articles);
            oci_fetch($query_articles);
            $prix_total.=oci_result($query_articles, 'PRIX');
            echo "
            <div class='row border-top border-bottom'>
                                <div class='row main align-items-center'>
                                    <div class='col-2'><img class='img-fluid' src='" .readImagesProduit($bdd,$ref_article) ."'></div>
                                    <div class='col'>
                                        <div class='row text-muted'>Montre</div>
                                        <div class='row'>".oci_result($query_articles,'LIBELLE')."</div>
                                    </div>
                                    <div class='col'>
                                        <a href='#'>-</a><a href='#' class='border'>1</a><a href='#'>+</a>
                                    </div>
                                    <div class='col'>&euro;". oci_result($query_articles,'PRIX')." <span class='close'>&#10005;</span></div>
                                </div>
                            </div>
                ";
        }
    }


   
    oci_close($bdd);
?>