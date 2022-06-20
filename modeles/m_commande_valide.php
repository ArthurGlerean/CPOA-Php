<?php
    //créaation de la commande
    $query_add_commande = oci_parse($bdd, 'Insert into COMMANDE values(:n_id_commande,:n_id_client,:n_prix,:n_date_livraison,:n_etat)');
    oci_bind_by_name($query_add_commande, ':n_id_commande', $_GET["commande"]);
    oci_bind_by_name($query_add_commande, ':n_id_client', $_SESSION["id_user"]);
    oci_bind_by_name($query_add_commande, ':n_prix', $_GET["price"]);
    $day = date("d") + 10;      //la livraison sera dans 10 jours
    $date_livraison = date(''.$day.'-m-y');
    oci_bind_by_name($query_add_commande, ':n_date_livraison', $date_livraison);
    $etat = 1;
    oci_bind_by_name($query_add_commande, ':n_etat', $etat);
    oci_execute($query_add_commande);
    oci_close($bdd);

    //suppression du panier associé à cette commande
    $query_delete_panier = oci_parse($bdd, 'Delete from PANIER where ID_PANIER = :n_id_panier');
    oci_bind_by_name($query_delete_panier, ':n_id_panier', $_GET["commande"]);
    oci_execute($query_delete_panier);
?>