<?php
    $query = oci_parse($bdd, 'Select * From CATEGORIE');
    oci_execute($query);  
    while(($data = oci_fetch_row($query)) != false){
        $cat=(string)$data[1];
        ${"query_$cat"}=oci_parse($bdd,'Select * from PRODUITS p join CATEGORIE c on p.IDCAT=c.IDCAT where LIBELLECAT= :cat');
        oci_bind_by_name(${"query_$cat"}, ':cat', $cat);
        oci_execute(${"query_$cat"});
    }  
    
    //fonctions pour afficher les images du produit $id
    function readImagesProduit($bdd,$id){
        $query_test = oci_parse($bdd, 'Select IMAGE_1 from LOT_IMAGES l where l.NUM_PRODUIT= :n_id');
        oci_bind_by_name($query_test, ':n_id', $id);
        oci_execute($query_test);
        oci_fetch($query_test);
        $result1=oci_result($query_test, 'IMAGE_1');
        $result_1 = read_clob($result1);
        return $result_1;
    }
    

    oci_close($bdd);
?>