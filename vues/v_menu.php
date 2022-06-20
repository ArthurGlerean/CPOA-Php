<head>
    <link href="./styles/s_menu.css" rel="stylesheet">
</head>
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="?index.php&target=home"><p class="title">easyJewel</p></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="?index.php&target=home">Accueil</a></li>
                    <li><a href="?index.php&target=produits">Nos produits</a></li>
                    <li><a href="?index.php&target=panier"><?php if($_SESSION["isConnected"] == 1){echo "Mon Panier";} ?></a></li>
                    <li><a href="?index.php&target=<?php if($_SESSION["isConnected"]== 1){echo "profil";}else{ echo "connexion&type=inscription"; } ?>">
                            <?php if($_SESSION["isConnected"]== 1){echo "Mon profil";}else{ echo "Me connecter"; } ?>
                        </a>
                    </li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    
    <section class="home">
    </section>
			

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./app.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
