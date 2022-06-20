<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./styles/s_details_produits.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>easyJewel FR Site Officiel | La Bijouterie De Référence Pour hommes.</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu_fixe.php"); ?>
    </header>
    <main>
        <h2 class="title-panier"><a class="return" href="?index.php&target=produits"> < </a> En savoir plus  </h2>
        <hr>
        


        <div class="container">
        <div class="description_produit">
            <div class="section" id="carousel">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mr-auto ml-auto">

                            <!-- Carrousel Debut -->
                            <div class="card card-raised card-carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <?php readImagesProduit2($bdd,$_GET["ref"]); ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <p class="material-icons"><</p>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <p class="material-icons">></p>
                                </a>
                                </div>
                            </div>
                            <!-- Carrousel Fin -->

                        </div>
                    </div>
                </div>
            </div>


            <div style="max-width:400px">
                <h2>🛍️ <?php echo oci_result($query_produit,"LIBELLE"); ?></h2>
                <h2>💸 <?php echo oci_result($query_produit,"PRIX"). " €"; ?></h2>
                <h2>📈 <?php echo oci_result($query_produit,"STOCK")." produits restants." ?></h2>
                <h2>✍️ Descriptif :</h2>
                <h3><?php echo oci_result($query_produit,"DESCRIPTION"); ?></h3>
            </div>
        </div>
        <div class="container">
            <div class="be-comment-block">
                <h1 class="comments-title">Commentaires (<?php echo $nb_commentaires?>) </h1>
                <!-- affichage des commentaires du produit !-->
                <?php require_once("./controlleurs/c_commentaire_template.php"); ?>

                <!-- affichage du formulaire pour ajouter un commentaire !--> 
                <form class="form-block" method="post">
                    <div class="row">

                        <label for="content_comment">Ajouter un commentaire</label>
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="<?php if(isset($erreur_commentaire) && !empty($erreur_commentaire)){echo $erreur_commentaire;}else{echo "Votre commentaire";} ?>" name="content_comment"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right" type="submit" name="submitComment">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</html>