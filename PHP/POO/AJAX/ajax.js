// Ex 1
document.getElementById("boutonAleatoire").addEventListener("click", (event)=>{
    event.preventDefault(); //annuler les événements par défaut

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        console.log(xhr.readyState);
        if (xhr.readyState == 4) { // état de chargement de la reponse du serveur, fini
            if (xhr.status == 200) { // reponse du serveur, succés
                let ListeAleatoire = xhr.responseText.split(",");
                console.log("liste aleatoire : ", ListeAleatoire);
                let LongueurListe = ListeAleatoire.length;
                let indexAleatoire = Math.floor(Math.random()*LongueurListe);
                let repAlea = ListeAleatoire[indexAleatoire];
                document.getElementById("reponseAleatoire").innerHTML = repAlea;
            }
        }
    };
     // créer et lancer la requête au serveur
    xhr.open('GET', 'ajaxTraitementEx1.php');
     // xhr.open('GET', 'Ex1FormButtonTextTraitementooo.php'); // test 404
    xhr.send(null);
});

// Ex 2
document.getElementById("btn-MajusculeMoi").addEventListener("click", (event)=>{
    event.preventDefault();    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                document.getElementById("div-MajusculeMoi").innerHTML = xhr.responseText;
            }
        }
    }
    let formulaire = new FormData (document.getElementById("formMajuscule"));
    xhr.open("POST", "./ajaxTraitementEx2.php");
    xhr.send(formulaire);
});

//Ex 3
document.getElementById("listeAnimaux").addEventListener("change", (event)=>{
    event.preventDefault();
    var xhr = new XMLHttpRequest();

    function getAnimalChoisi(selectId){
        var selectAnimal = document.getElementById(selectId);
        return selectAnimal.options[selectAnimal.selectedIndex].value;
    }
    var indexAnimalChoisi = getAnimalChoisi("listeAnimaux");
    console.log(indexAnimalChoisi);

    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let ListeAnimauxJS = JSON.parse (xhr.responseText);
                
                // console.log (xhr.responseText);
                // console.log (typeof(xhr.responseText));
                // console.log (JSON.parse(xhr.responseText));
                // console.log (typeof(JSON.parse(xhr.responseText)));

                let srcImageAnimal = ListeAnimauxJS[indexAnimalChoisi];
                
                document.getElementById("imageAnimal").innerHTML = '<img src="' + srcImageAnimal + '" >';


            }
        }
    }

    let formulaire = new FormData (document.getElementById("formAnimaux"));
    xhr.open("GET", "./ajaxTraitementEx3.php")
    
    xhr.send(null);
});