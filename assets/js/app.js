//on vérifie si le navigateur gère les serviceWorkers
    if("serviceWorker" in navigator)
    {
        navigator.serviceWorker.register('/serviceWorker.js');
    }
//fin des serviceWorkers


//alert au micro
    var microPhone = document.getElementById('micro');
    function alertMicro() {
        alert("La fonctionalité micro n'est pas encore disponible, ...")
    }
    microPhone.addEventListener("click", alertMicro);
//fin alert au micro

//interaction dans le formulaire
    var champSearch = document.getElementById("search");

    function csMission() {
        alert("Il veut faire une recherche de produit");
        champSearch.removeEventListener("click", csMission)
    }
    champSearch.addEventListener("click", csMission)
//fin de l'interaction dans le formulaire

// selection des produits sur la page index.html
    var produits = document.getElementsByClassName('produit');
    var modalBackEnd = document.getElementsByClassName('global_details_produit')[0];
    var modalContent = document.getElementsByClassName('details_produit')[0];
    var closeBtn = document.getElementsByClassName("close_btn")[0];
    //boucle de répétition sur chaque produit
        for (let index = 0; index < produits.length; index++) {
            var element = produits[index];
            element.addEventListener("click", ()=>{
                window.location.href="#reference_haut";
                modalBackEnd.style.display="block";
                closeBtn.addEventListener("click", ()=>{
                    modalBackEnd.style.display="none";
                })
            });
        }


//récupération de l'année en cours
    var annee = new Date();
    var anneeEnCours = document.getElementById("annee_encours");
    anneeEnCours.innerHTML = annee.getFullYear();

// gestion de la requete ajax pour rechercher un produit