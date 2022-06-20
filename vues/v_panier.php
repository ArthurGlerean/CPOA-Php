<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./styles/s_panier.css" rel="stylesheet">
    <title>easyJewel Le Site Officiel | Panier</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu_fixe.php"); ?>
    </header>
    <main>
        <h2 class="title-panier"> Mon Panier 🛒 </h2>
        <hr>
        <div class="card-panier">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4 class="title-panier2"><b>Mon shopping</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><?php echo nb_articles($bdd,$ref_panier); ?> articles</div>
                        </div>
                    </div>  
                    
                    <!-- PARTIE AFFICHAGE DES ARTICLES DU PANIER -->
                    <?php
                        afficher_articles($bdd,$ref_panier);
                    ?>

                    <!--------------------------------------------->

                    
                    <div class="back-to-shop"><a href="?index.php&target=produits">&leftarrow;</a><span class="text-muted">Retour au shopping</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Résumé</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">Articles <?php echo nb_articles($bdd,$ref_panier); ?></div>
                        <div class="col text-right">&euro; <?php echo $prix_total; ?></div>
                    </div>
                    <form method="post">
                        <p>LIVRAISON</p>
                        <select><option class="text-muted">Livraison-Standard &euro;5.00</option></select>
                        <p>CODE PROMO</p>
                        <input id="code" placeholder="Saisissez votre code">
                    
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">PRIX TOTAL</div>
                            <div class="col text-right">&euro; <?php echo $prix_total ; ?></div>
                        </div>
                        <button class="btn" type="submit" name="panierSubmit">COMMANDER</button>
                    </form>
                </div>
            </div>
            
        </div>

    </main>
</body>