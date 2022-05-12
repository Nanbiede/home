<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="black">
    <meta charset="UTF-8">
    <title>Nanbiédé ?</title>
    <link rel="stylesheet" href="assets/css/all_style.css">
    <link rel="shortcut icon" href="assets/images/icon_72x72.png">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="assets/images/icon_96x96.png">
    <script src="https://kit.fontawesome.com/23022ba9b2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Création du block de chargement -->
    
    <div class="loading_content">
        <img src="assets/images/icon_72x72.png" alt="" class="icon_app">
        <div class="chargement"></div>
    </div>
    <!-- -->
    <!-- Fin du block de chargement -->

    <div class="corps_app">

        <div class="bar_menu_haut">
            <img src="assets/images/icon_72x72.png" alt="logo Nanbiédé">
            <h2 class="app_title">Nanbiédé ?</h2>
            <form action="/" class="searchForm">
                <span class="choix"></span>
                <input type="text" placeholder="chercher une denrée, touche 'Entrée pour valider' " id="search" class="search">
            </form>
            <i class="fa-solid fa-microphone micro" id="micro" title="Lancer la recherche par voix ..."></i>
            <marquee behavior="" direction="">Effectuer des recherches pour voir plus de produits à votre goût ... </marquee>
        </div>

        <div class="tous_les_produits">
            
            <div class="produit">
                <img src="assets/images/back5.jpg" alt="image produit">
                <div class="produit_details">
                    <div class="pdt_dtails">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="nom_produit">Nom Du Produit</span>
                        <span class="prix_produit"><i class="fa-solid fa-hand-holding-dollar"></i>  &nbsp; 500 <i class="montant"></i><i class="devise">&nbsp; FCFA</i></span>
                    </div>
                </div>
            </div>

            <div class="produit">
                <img src="assets/images/back5.jpg" alt="image produit">
                <div class="produit_details">
                    <div class="pdt_dtails">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="nom_produit">Nom Du Produit</span>
                        <span class="prix_produit"><i class="fa-solid fa-hand-holding-dollar"></i>  &nbsp; 500 <i class="montant"></i><i class="devise">&nbsp; FCFA</i></span>
                    </div>
                </div>
            </div>

            <div class="produit">
                <img src="assets/images/back5.jpg" alt="image produit">
                <div class="produit_details">
                    <div class="pdt_dtails">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="nom_produit">Nom Du Produit</span>
                        <span class="prix_produit"><i class="fa-solid fa-hand-holding-dollar"></i>  &nbsp; 500 <i class="montant"></i><i class="devise">&nbsp; FCFA</i></span>
                    </div>
                </div>
            </div>

            <div class="produit">
                <img src="assets/images/back5.jpg" alt="image produit">
                <div class="produit_details">
                    <div class="pdt_dtails">
                        <i class="fa-brands fa-product-hunt"></i>
                        <span class="nom_produit">Nom Du Produit</span>
                        <span class="prix_produit"><i class="fa-solid fa-hand-holding-dollar"></i>  &nbsp; 500 <i class="montant"></i><i class="devise">&nbsp; FCFA</i></span>
                    </div>
                </div>
            </div>

        </div>
        <footer>
            <hr>
            <p class="droit">
                Copyright &copy; <span id="annee_encours"></span> Nanbiédé
            </p>
        </footer>
    </div>
    

    <div class="global_details_produit" id="modalBackEnd">
        <span id="reference_haut"></span>
        <div class="details_produit">
            <span class="nom_produit">Nom du produit</span>

            <img src="assets/images/back0.png" alt="Image du Produit" class="image_produit">
            <br>
            <div class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. At odit reprehenderit ratione illum cupiditate repudiandae, accusamus iure dolorum qui perferendis dicta totam atque aliquam vero debitis, nihil facere. Iure, accusantium!
            </div>

            <div class="logo_liste"><div></div></div>

            <div class="type1">
                <span class="phi">Prix par unité (U)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix par démi-douzaine (6U)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix par douzaine (12U)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix par unité (U)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="logo_liste"><div></div></div>

            <div class="type1 prix_pdt">
                <span class="phi">Prix par Kilogramme (kg)</span>
                <span class="donnee le_prix_pdt"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix en gros (25 kg)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix en gros (50 kg)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="type1">
                <span class="phi">Prix en gros (2 sacs de 25 kg)</span>
                <span class="donnee"> N/A </span>
            </div>

            <div class="logo_liste">
                <div></div>
            </div>

            <div class="type2">
                <div class="phi">Les Marchés Références</div>
                <span class="marche">Dantokpa</span>
                <span class="marche">Yara</span>
                <span class="marche">Zoungo</span>
                <span class="marche">Wèssè</span>
                <span class="marche">Comè</span>
                <span class="marche">Dantokpa</span>
                <span class="marche">Yara</span>
                <span class="marche">Zoungo</span>
                <span class="marche">Wèssè</span>
                <span class="marche">Comè</span>
            </div>

            
            <div class="logo_liste">
                <div></div>
            </div>
            <span class="close_btn">Fermer</span>
        </div>
    </div>


    <!-- les scripts Javascript -->
    <script src="assets/js/app.js"></script>
    
    <!-- retardement du script de chargement -->
    <!-- -->
    <script>
        function showContent() {
            document.querySelector('.loading_content').classList.add('charge_fini');
        }
        setTimeout(showContent, 1000);
    </script>
    <!-- fin du script de chargement -->
    
</body>
</html>