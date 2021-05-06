function openTab(evt, tabName) {
    // Declare all variables
    var i, tabnemcontent, tablinksnem;
  
    // Get all elements with class="tabcontent" and hide them
    tabnemcontent = document.getElementsByClassName("tabnemcontent");
    for (i = 0; i < tabnemcontent.length; i++) {
      tabnemcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinksnem = document.getElementsByClassName("tablinksnem");
    for (i = 0; i < tablinksnem.length; i++) {
      tablinksnem[i].className = tablinksnem[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Get the element with id="defaultOpenGenem" and click on it
document.getElementById("defaultOpengen").click();

// barre d'ajout de base de données dans la section Serveur
var coll = document.getElementsByClassName("collapsibleaddserver");
var i;

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