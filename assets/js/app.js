// vérification de la présence des services Workers dans le navigateur
if("serviceWorker" in navigator)
{
    navigator.serviceWorker.register('/home/serviceWorker.js');
}
//fin de la vérification


//alert au micro
var microPhone = document.getElementById('micro');
function alertMicro() {
    alert("La fonctionalité micro n'est pas encore disponible, ...")
}
microPhone.addEventListener("click", alertMicro);

//fin alert au micro

// selection des produits sur la page index.html
var produits = document.getElementsByClassName(".produit");


//récupération de l'année en cours
var annee = new Date();
var anneeEnCours = document.getElementById("annee_encours");
anneeEnCours.innerHTML = annee.getFullYear();
anneeEnCours.style.FontFamily = "Orelega One";

// gestion de la requete ajax pour rechercher un produit
