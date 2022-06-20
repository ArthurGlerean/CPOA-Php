<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/s_profil.css" rel="stylesheet">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Profil</title>
</head>
<body>
    <header>
        <?php require_once("./vues/v_menu_fixe.php");  ?>
    </header>
    <main>
        <div class="en-tete-profil">
            <img class="photo_profil" src="https://drive.google.com/uc?id=13-ibQEioE7K3nEH30UJIxTt3YSraVSr5" alt="photo_profil">
            <div class="description-profil">
                <h2 class="title-profil">Mon Profil</h2>
                <ul class="description-liste">
                    <li class="element-profil">🤴 <?php echo $_SESSION["username"];?></li>
                    <li class="element-profil">📧 <?php echo $_SESSION["email_user"];?></li>
                    <li class="element-profil">🍀 Client fidèle à easyJewel</li>
                </ul>
                <a href="index.php?target=profil&action=deconnexion" class="btn btn-primary">Déconnexion</a>
            </div>
        </div>
        <hr class="hr">
        <div class="content-profil">
            <div class="commandes">
                <h3 class="h3-left">Mes Commandes</h3>
                <?php require_once("./vues/v_commande_template.php");  ?>
            </div>
            <div class="historique">
                <h3 class="h3-right">Mon Historique</h3>
                <p>Ici s'affiche l'ensemble des commandes déjà reçus !</p>
                <div class="historique-content">
                    <?php affiche_commandes_recues($bdd,$_SESSION["id_user"])?>
                </div>
            </div>
        </div>
        
    </main> 
</body>
</html>