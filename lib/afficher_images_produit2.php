<?php
//fonctions pour afficher les 3 images du produit $id
    function readImagesProduit2($bdd,$id){
        $query_test = oci_parse($bdd, 'Select IMAGE_1,IMAGE_2,IMAGE_3 from LOT_IMAGES l where l.NUM_PRODUIT= :n_id');
        oci_bind_by_name($query_test, ':n_id', $id);
        oci_execute($query_test);
        oci_fetch($query_test);
        $result1=oci_result($query_test, 'IMAGE_1');
        $result_1 = read_clob($result1);
        $result2=oci_result($query_test, 'IMAGE_2');
        $result_2 = read_clob($result2);
        $result3=oci_result($query_test, 'IMAGE_3');
        $result_3 = read_clob($result3);
        echo"
            <div class='carousel-item active'>
            <img class='d-block w-100' src='$result_1' 
            alt='First slide'>
            </div>
            <div class='carousel-item'>
            <img class='d-block w-100' src='$result_2'  alt='Second slide'>
            </div>
            <div class='carousel-item'>
            <img class='d-block w-100' src='$result_3' alt='Third slide'>
            </div>
        ";
    }

?>