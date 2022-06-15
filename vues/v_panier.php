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
        <div class="card-panier">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4 class="title-panier2"><b>Mon shopping</b></h4></div>
                            <div class="col align-self-center text-right text-muted"><?php echo $nb_articles;?> articles</div>
                        </div>
                    </div>  
                    
                    <!-- PARTIE AFFICHAGE DES ARTICLES DU PANIER -->
                    <?php
                        afficher_articles($bdd,$ref_panier);
                    ?>


                    <?php for($i = 0; $i < $nb_articles; $i++){ echo"
                            <div class='row border-top border-bottom'>
                                <div class='row main align-items-center'>
                                    <div class='col-2'><img class='img-fluid' src='https://i.imgur.com/1GrakTl.jpg'></div>
                                    <div class='col'>
                                        <div class='row text-muted'>Montre</div>
                                        <div class='row'>Montre connectée</div>
                                    </div>
                                    <div class='col'>
                                        <a href='#'>-</a><a href='#' class='border'>1</a><a href='#'>+</a>
                                    </div>
                                    <div class='col'>&euro; 44.00 <span class='close'>&#10005;</span></div>
                                </div>
                            </div>
                        "; } 
                    ?>
                    <!--------------------------------------------->

                    
                    <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Retour au shopping</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div><h5><b>Summary</b></h5></div>
                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS 3</div>
                        <div class="col text-right">&euro; 132.00</div>
                    </div>
                    <form>
                        <p>SHIPPING</p>
                        <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&euro; 137.00</div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </div>
            </div>
            
        </div>

    </main>
</body>