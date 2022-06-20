<?php
    //fonction de connexion à la base de données
    $bdd = oci_new_connect('p2006969','584758','(
        Description = (
            address_list = 
            (address = (protocol = tcp)(host = iutdoua-ora.univ-lyon1.fr)(port = 1521))
        )
        (connect_data =
             (Service_name = ORCL.UNIV-LYON1.FR)
        )
    )');
?>
