/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
if("serviceWorker" in navigator)
{
    navigator.serviceWorker.register('/serviceWorker.js');
}
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////
//alert au micro/////////////////////////////////////////////////////
var microPhone = document.getElementById('micro');
function alertMicro() {
    alert("La fonctionalité micro n'est pas encore disponible, ...")
}
microPhone.addEventListener("click", alertMicro);

/////////////////////////////////////////////////////////////////////
// selection des produits sur la page index.html/////////////////////
var produits = document.getElementsByClassName('produit');

var modalBackEnd = document.getElementsByClassName('global_details_produit')[0];
var modalContent = document.getElementsByClassName('details_produit')[0];
var closeBtn = document.getElementsByClassName("close_btn")[0];

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



/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////
//récupération de l'année en cours///////////////////////////////////
var annee = new Date();
var anneeEnCours = document.getElementById("annee_encours");
anneeEnCours.innerHTML = annee.getFullYear();
anneeEnCours.style.FontFamily = "Orelega One";
// gestion de la requete ajax pour rechercher un produit/////////////
/////////////////////////////////////////////////////////////////////