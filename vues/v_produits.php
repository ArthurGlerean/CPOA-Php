<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./styles/s_produits.css" rel="stylesheet">
    <title>easyJewel Le Site Officiel | Panier</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu.php"); ?>
    </header>
    <main>

        <section class="en-tete-produits">
            <h1>Nos Produits</h1>
            <p>
                Depuis 2022, easyJewel donne toute son énergie pour vous proposer des bijoux de qualité. Vous trouverez ici tous nos produits. Vous pouvez les triez si vous le souhaitez. Tous nos produits sont disponibles en taille unique.
            </p>    
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
                        <option <?php if($bracelets == 1){ echo "selected";}else{ echo"";} ?>> Bracelets </option>
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
            if($bracelets == 1 || $all == 1){
                echo "
                <section class='gourmettes'>
                    <section class='en-tete-gourmettes'>
                        <h2>Bracelets</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium laborum illo dolorum ipsum tenetur facere, quaerat dolores, harum ducimus animi ex inventore, suscipit doloremque facilis a quasi velit officiis nostrum?</p>";
                    echo "</section>
                    <section class='gourmettes-content'>";
                    
            
                    
        ?>
                    <?php 
                        while(oci_fetch($query_Bracelet)){
                            $id_bracelet=oci_result($query_Bracelet, 'IDPRODUIT');
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='".readImagesProduit($bdd,$id_bracelet)."'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <form class='form_produit' method='post'>
                                                <h5 class='card-title font-weight-bold'>".oci_result($query_Bracelet, 'LIBELLE')."</h5>
                                                <input style='visibility:hidden;width:1px;height:1px'name='ref_produit' value=".oci_result($query_Bracelet, 'IDPRODUIT').">
                                                <p class='card-text'>".oci_result($query_Bracelet, 'PRIX')."€</p>
                                                <div class='link_buttons'>
                                                    <a href='?index.php&target=details_produits&ref=".oci_result($query_Bracelet, 'IDPRODUIT')."' class='btn details px-auto'>voir les détails</a><br />
                                                    <button  class='btn cart px-auto' type='submit' name='submitProduit' >Ajouter au panier</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
                        } 
                        oci_free_statement($query_Bracelet);
        }
                    ?>
                    </section>
                </section>
           


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
                            $id_chaine=oci_result($query_Chaine, 'IDPRODUIT');
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='".readImagesProduit($bdd,$id_chaine)."'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <form class='form_produit' method='post'>
                                                <h5 class='card-title font-weight-bold'>".oci_result($query_Chaine, 'LIBELLE')."</h5>
                                                <input style='visibility:hidden;width:1px;height:1px'name='ref_produit' value=".oci_result($query_Chaine, 'IDPRODUIT').">
                                                <p class='card-text'>".oci_result($query_Chaine, 'PRIX')."€</p>
                                                <div class='link_buttons'>
                                                    <a href='?index.php&target=details_produits&ref=".oci_result($query_Chaine, 'IDPRODUIT')."' class='btn details px-auto'>voir les détails</a><br />
                                                    <button  class='btn cart px-auto' type='submit' name='submitProduit' >Ajouter au panier</a>
                                                </div>
                                            </form>
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
                            $id_montre=oci_result($query_Montre, 'IDPRODUIT');
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='".readImagesProduit($bdd,$id_montre)."'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <form class='form_produit' method='post'>
                                                <h5 class='card-title font-weight-bold'>".oci_result($query_Montre, 'LIBELLE')."</h5>
                                                <input style='visibility:hidden;width:1px;height:1px'name='ref_produit' value=".oci_result($query_Montre, 'IDPRODUIT').">
                                                <p class='card-text'>".oci_result($query_Montre, 'PRIX')."€</p>
                                                <div class='link_buttons'>
                                                    <a href='?index.php&target=details_produits&ref=".oci_result($query_Montre, 'IDPRODUIT')."' class='btn details px-auto'>voir les détails</a><br />
                                                    <button  class='btn cart px-auto' type='submit' name='submitProduit' >Ajouter au panier</a>
                                                </div>
                                            </form>
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
                            $id_bague=oci_result($query_Bague, 'IDPRODUIT');
                            echo " 
                            <div class='container-fluid'>
                                <div class='card mx-auto col-md-3 col-10 mt-5'>
                                    <img class='mx-auto img-thumbnail'
                                        src='".readImagesProduit($bdd,$id_bague)."'
                                    />
                                    <div class='card-body text-center mx-auto'>
                                        <div class='cvp'>
                                            <form class='form_produit' method='post'>
                                                <h5 class='card-title font-weight-bold'>".oci_result($query_Bague, 'LIBELLE')."</h5>
                                                <input style='visibility:hidden;width:1px;height:1px'name='ref_produit' value=".oci_result($query_Bague, 'IDPRODUIT').">
                                                <p class='card-text'>".oci_result($query_Bague, 'PRIX')."€</p>
                                                <div class='link_buttons'>
                                                    <a href='?index.php&target=details_produits&ref=".oci_result($query_Bague, 'IDPRODUIT')."' class='btn details px-auto'>voir les détails</a><br />
                                                    <button  class='btn cart px-auto' type='submit' name='submitProduit' >Ajouter au panier</a>
                                                </div>
                                            </form>
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

