<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./styles/s_produits.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu.php"); ?>
    </header>
    <main>

        <section class="en-tete-produits">
            <h1>Nos Produits</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea placeat maiores expedita aspernatur maxime accusantium, soluta perferendis deserunt non laboriosam commodi sunt pariatur facere libero. Velit provident maiores tenetur odit.</p>
        </section>
        <form class="barre-filtres" method="post">
            <div>
                <!-- Titre -->
                <h3>Filtres:</h3>
            </div>
            <div class="selectdiv">
                <!-- Catégorie -->
                <label>
                    <select name="select_categorie">
                        <option <?php if($all == 1){ echo "selected";}else{ echo""; } ?>> -Catégorie- </option>
                        <option <?php if($gourmettes == 1){ echo "selected";}else{ echo"";} ?>> Gourmettes </option>
                        <option <?php if($montres == 1){ echo "selected";} else{ echo"";}?>> Montres </option>
                        <option <?php if($chaines == 1){ echo "selected";} else{ echo"";}?>> Chaines </option>
                        <option <?php if($bagues == 1){ echo "selected";} else{ echo"";}?>> Bagues </option>
                    </select>
                </label>
            </div>
            <div class="selectdiv">
                <!-- Prix -->
                <label>
                    <select name="select_prix">
                        <option selected> -Prix- </option>
                        <option> Croissant </option>
                        <option> Décroissant </option>
                    </select>
                </label>
            </div>
            <!-- Application des filtres -->
            <button class="button" type="submit" name="submitFilter">Appliquer</button>
        </form>


        <?php 
            if($gourmettes == 1 || $all == 1){
                echo "
                <section class='gourmettes'>
                    <section class='en-tete-gourmettes'>
                        <h2>Gourmettes</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium laborum illo dolorum ipsum tenetur facere, quaerat dolores, harum ducimus animi ex inventore, suscipit doloremque facilis a quasi velit officiis nostrum?</p>
                    </section>
                    <section class='gourmettes-content'>
                    ";
        ?>
                    <?php 
                        while(oci_fetch($query_Bracelet)){
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='./images/test_bracelet2.jpg'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <h5 class='card-title font-weight-bold'>".oci_result($query_Bracelet, 'LIBELLE')."</h5>
                                            <p class='card-text'>".oci_result($query_Bracelet, 'PRIX')."€</p>
                                            <div class='link_buttons'>
                                                <a href='?index.php&target=details_produits&ref=".oci_result($query_Bracelet, 'IDPRODUIT')."' class='btn details px-auto'>voir les détails</a><br />
                                                <a href='#' class='btn cart px-auto'>Ajouter au panier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
                        } 
                        oci_free_statement($query_Bracelet);
                    ?>
                    </section>
                </section>
            <?php 
            }
            ?>


        <?php 
            if($chaines == 1 || $all == 1){
                echo "
                <section class='chaines'>
                    <section class='en-tete-chaines'>
                        <h2>Chaines</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non rerum minima iure voluptatum ut necessitatibus facere eveniet earum atque aliquam debitis, quidem suscipit natus neque, facilis aperiam labore dolore placeat.</p>
                    </section>
                    <section class='chaines-content'>
                ";
        ?>
                <?php 
                        while(oci_fetch($query_Chaine)){
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='./images/test_bracelet2.jpg'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <h5 class='card-title font-weight-bold'>".oci_result($query_Chaine, 'LIBELLE')."</h5>
                                            <p class='card-text'>".oci_result($query_Chaine, 'PRIX')."€</p>
                                            <div class='link_buttons'>
                                                <a href='?index.php&target=details_produits&ref=".oci_result($query_Chaine, 'IDPRODUIT')."' class='btn details px-auto'>view details</a><br />
                                                <a href='#' class='btn cart px-auto'>ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
                        } 
                        oci_free_statement($query_Chaine);
            }
                    ?>


        <?php 
            if($montres == 1 || $all == 1){
                echo "
                <section class='montres'>
                    <section class='en-tete-montres'>
                        <h2>Montres</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore ratione pariatur ipsa. Aspernatur deserunt perferendis reiciendis ipsum unde, reprehenderit, natus commodi maxime ducimus nihil amet eius, nobis distinctio a?</p>
                    </section>
                    <section class='montres-content'>
                ";
            
        ?>
                <?php 
                        while(oci_fetch($query_Montre)){
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='./images/test_bracelet2.jpg'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <h5 class='card-title font-weight-bold'>".oci_result($query_Montre, 'LIBELLE')."</h5>
                                            <p class='card-text'>".oci_result($query_Montre, 'PRIX')."€</p>
                                            <div class='link_buttons'>
                                                <a href='?index.php&target=details_produits&ref=".oci_result($query_Montre, 'IDPRODUIT')."' class='btn details px-auto'>view details</a><br />
                                                <a href='#' class='btn cart px-auto'>ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
                        } 
                        oci_free_statement($query_Montre);
            }
                    ?>
        <?php 
            if($bagues == 1 || $all == 1){
                echo "
                <section class='bagues'>
                    <section class='en-tete-bagues'>
                        <h2>Bagues</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore ratione pariatur ipsa. Aspernatur deserunt perferendis reiciendis ipsum unde, reprehenderit, natus commodi maxime ducimus nihil amet eius, nobis distinctio a?</p>
                    </section>
                    <section class='bagues-content'>
                ";
        ?>
                <?php 
                        while(oci_fetch($query_Bague)){
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='./images/test_bracelet2.jpg'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <h5 class='card-title font-weight-bold'>".oci_result($query_Bague, 'LIBELLE')."</h5>
                                            <p class='card-text'>".oci_result($query_Bague, 'PRIX')."€</p>
                                            <div class='link_buttons'>
                                                <a href='?index.php&target=details_produits&ref=".oci_result($query_Bague, 'IDPRODUIT')."' class='btn details px-auto'>view details</a><br />
                                                <a href='#' class='btn cart px-auto'>ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
                        } 
                        oci_free_statement($query_Bague);
                }
                    ?>

    </main>
    
</body>