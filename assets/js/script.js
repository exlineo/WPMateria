// Ouvrir les tabulations
function openTab(evt, tabName) {
    // Declaration des variables
    var i, tabnemcontent, tablinksnem;
  
    // Avoir les éléments avec la classe "tabcontent" et les cacher
    tabnemcontent = document.getElementsByClassName("tabnemcontent");
    for (i = 0; i < tabnemcontent.length; i++) {
      tabnemcontent[i].style.display = "none";
    }
  
    // Avoir tous les éléments avec la classe "tablinks" et supprimer la classe "active"
    tablinksnem = document.getElementsByClassName("tablinksnem");
    for (i = 0; i < tablinksnem.length; i++) {
      tablinksnem[i].className = tablinksnem[i].className.replace(" active", "");
    }
  
    // Montrer l'onglet actuel, et ajouter une classe "active" au bouton qui ouvre l'onglet
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Avoir l'élement avec l'Id "defaultOpenGenem" et cliquer dessus
document.getElementById("defaultOpengen").click();

// barre d'ajout de base de données dans la section Serveur
var coll = document.getElementsByClassName("collapsibleaddserver");
var i;
// Vérifier l'état des onglets et n'ouvrir que celui qui a été cliqué
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var contentbddnem = this.nextElementSibling;
    if (contentbddnem.style.display === "block") {
      contentbddnem.style.display = "none";
    } else {
      contentbddnem.style.display = "block";
    }
  });
}
// Lorsque javascript est prêt, on récupère les événements sur les champs input
window.onload = function(){
  let nemUrl = document.querySelector('.nemUrl');
  nemUrl.addEventListener('input', ()=>{
    console.log("Input changé", nemUrl);
  });
}