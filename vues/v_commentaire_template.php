<link href="./styles/s_commentaire_template.css" rel="stylesheet">


<?php while ($commentaire = oci_fetch($query_commentaires)) { 
        echo "
        <div class='be-comment'>
            <div class='be-img-comment'>	
                <a href='blog-detail-2.html'>
                    <img src='https://drive.google.com/uc?id=13-ibQEioE7K3nEH30UJIxTt3YSraVSr5' alt='' class='be-ava-comment'>
                </a>
            </div>
            <div class='be-comment-content'>
                
                    <span class='be-comment-name'>
                        <p>".oci_result($query_commentaires,"NOM_UTILISATEUR")."</p>
                    </span>
                    <span class='be-comment-time'>
                        <i class='fa fa-clock-o'></i>
                        ".oci_result($query_commentaires,"DATE_POSTE")."
                    </span>

                <p class='be-comment-text'>
                    ".read_clob(oci_result($query_commentaires,"CONTENU"))."
                </p>
            </div>
        </div>
        ";
    }
?>
