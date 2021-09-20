var login = window.prompt("Quel est ton login ?");

if (login !== "Cap") {
  window.alert("Vous n'êtes pas moi...");
  window.location.href="admin.php";
} else {
  var test;
  for (var MdP = "Creations"; MdP !== test; ) {
    test = window.prompt("Quel est le Mot de Passe ?");
    if (test === MdP) {
      window.alert("Bienvenue");
    } else {
      window.alert("Incorrect");
      window.console.error("erreur");
      var reessayer = window.confirm("Réessayer?");
      if (reessayer === false) {
        window.location.href="admin.php";
        break;
      }
    }
  }
}
window.console.log(login);  

