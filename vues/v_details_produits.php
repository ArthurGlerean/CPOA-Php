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
            <div class="be-comment-block">
                <h1 class="comments-title">Commentaires (3) <?php if(isset($erreur_commentaire) && !empty($erreur_commentaire)){echo $erreur_commentaire;} ?></h1>
                <!-- affichage des commentaires du produit !-->
                <?php require_once("./controlleurs/c_commentaire_template.php"); ?>

                <!-- affichage du formulaire pour ajouter un commentaire !--> 
                <form class="form-block" method="post">
                    <div class="row">

                        <label for="content_comment">Ajouter un commentaire</label>
                        <div class="col-xs-12">									
                            <div class="form-group">
                                <textarea class="form-input" required="" placeholder="Votre commentaire" name="content_comment"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right" type="submit" name="submitComment">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>