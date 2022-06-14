<?php
    $query = oci_parse($bdd, 'Select * From CATEGORIE');
    oci_execute($query);  
    while(($data = oci_fetch_row($query)) != false){
        $cat=(string)$data[1];
        ${"query_$cat"}=oci_parse($bdd,'Select * from PRODUITS p join CATEGORIE c on p.IDCAT=c.IDCAT where LIBELLECAT= :cat');
        oci_bind_by_name(${"query_$cat"}, ':cat', $cat);
        oci_execute(${"query_$cat"});
        //echo "query_".$cat;
    }   
    oci_close($bdd);
?>