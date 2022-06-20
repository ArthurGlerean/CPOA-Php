<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./styles/s_connexion.css" rel="stylesheet">
    <title>easyJewel Le Site Officiel | Connexion</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu_fixe.php"); ?>
    </header>
    <main>
        <?php   //affichaage du formulaire d'inscription
            if(isset($_GET["type"]) && $_GET["type"] == "inscription"){ echo "
            <div class='container_form'>
                <div class='row'>
                    <div class='col-lg-10 col-xl-9 mx-auto'>
                        <div class='card flex-row my-5 border-0 shadow rounded-3 overflow-hidden'>
                            <div class='card-img-left d-none d-md-flex'>
                            </div>
                            <div class='card-body p-4 p-sm-5'>
                                <h5 class='card-title text-center mb-5 fw-light fs-5'>S'inscire</h5>
                                <form method='post'>

                                <div class='form-floating mb-3'>
                                    <input type='text' class='form-control' id='floatingInputUsername' name='nom_utilisateur' placeholder='myusername' required autofocus>
                                    <label for='floatingInputUsername'>Nom d'utilisateur</label>
                                </div>

                                <div class='form-floating mb-3'>
                                    <input type='email' class='form-control' id='floatingInputEmail' name='email_utilisateur' placeholder='name@example.com'>
                                    <label for='floatingInputEmail'>Adresse Mail</label>
                                </div>

                                <hr>

                                <div class='form-floating mb-3'>
                                    <input type='password' class='form-control' id='floatingPassword' name='mdp' placeholder='Password'>
                                    <label for='floatingPassword'>Mot de passe</label>
                                </div>

                                <div class='form-floating mb-3'>
                                    <input type='password' class='form-control' id='floatingPasswordConfirm' name='mdp_confirm' placeholder='Confirm Password'>
                                    <label for='floatingPasswordConfirm'>Confirmation Mot de passe</label>
                                </div>

                                <div class='d-grid mb-2'>
                                    <button class='btn btn-lg btn-primary btn-login fw-bold text-uppercase' type='submit' name='inscriptionSubmit'>S'inscire</button>
                                </div>

                                <a class='d-block text-center mt-2 small' href='?index.php&target=connexion&type=connexion'>Déjà inscrit ?</a>
                                <p class='valide'>"; if(isset($_POST["inscriptionSubmit"])){if(empty($erreur_inscription)){ echo "Inscription confirmée! Veuillez désormais vous connecter.</p>";}
                                                     else{ echo "<p class='erreur'>".$erreur_inscription."</p>";}}
                                echo "</p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        ?>
        <?php   //affichaage du formulaire de connexion
            if(isset($_GET["type"]) && $_GET["type"] == "connexion"){ echo "

            <div class='container_form'>
                <div class='row'>
                    <div class='col-lg-10 col-xl-9 mx-auto'>
                        <div class='card flex-row my-5 border-0 shadow rounded-3 overflow-hidden'>
                            <div class='card-img-left d-none d-md-flex'>
                            </div>
                            <div class='card-body p-4 p-sm-5'>
                                <h5 class='card-title text-center mb-5 fw-light fs-5'>Se connecter</h5>
                                <form method='post'>

                                <div class='form-floating mb-3'>
                                    <input type='text' class='form-control' id='floatingInputUsername' name='nom_utilisateur' placeholder='myusername' required autofocus>
                                    <label for='floatingInputUsername'>Nom d'utilisateur ou adresse mail</label>
                                </div>


                                <div class='form-floating mb-3'>
                                    <input type='password' class='form-control' id='floatingPassword' name='mdp' placeholder='Password'>
                                    <label for='floatingPassword'>Mot de passe</label>
                                </div>

                                <div class='d-grid mb-2'>
                                    <button class='btn btn-lg btn-primary btn-login fw-bold text-uppercase' type='submit' name='connexionSubmit'>Se connecter</button>
                                </div>

                                <a class='d-block text-center mt-2 small' href='?index.php&target=connexion&type=inscription'>Nouveau membre ?</a>

                                <p class='valide'>"; if(isset($_POST["connexionSubmit"])){if(empty($erreur_connexion)){ echo "Connexion établie</p>";}
                                                                                          else{ echo "<p class='erreur'>".$erreur_connexion."</p>";}}
                                echo "</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        ?>
    </main>
    
</body>


