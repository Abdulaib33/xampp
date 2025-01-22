// Sélection des éléments pour afficher les informations
let inforNavigateur = document.getElementById("infoNavigateur");
let infoFenetre = document.getElementById("infoFenetre");

// Affiche les informations du navigateur
infoNavigateur.textContent = "Navigateur :" + window.navigator.userAgent;

// Affiche les dimensions de la fenêtre
infoFenetre.textContent = " Dimensions de là fenetre  : " + window.innerWidth + "X" + window.innerHeight;
// Demande le nom de l'utilisateur
let nomUtilisateur = window.prompt("Quel est votre nom ?");
if (nomUtilisateur) {
    document.querySelector("h1").textContent = "Bienvenue, le site " + nomUtilisateur + " HAHAHAHAHAHAHAAHHAHAHAHAH !!! ";
} else {
    document.querySelector("h1").textContent = "je n'ai pas trouvé ton nom ";
}

// Sélection du bouton et ajout d'un événement de clic
let boutonTaille = document.getElementById("changerTaille");
boutonTaille.addEventListener("click", function() {
    window.resizeTo(800, 600);
    infoFenetre.textContent = "Dimensions de la fenêtre : " + window.innerWidth + "x" + window.innerHeight;
});

let boutonContenu = document.getElementById("changerContenu");
boutonContenu.addEventListener("click", function() {
    let nouveauParagraphe = document.createElement("p");
    nouveauParagraphe.textContent = "Voici un nouveau contenu ajouté à la page.";
    document.body.appendChild(nouveauParagraphe);
});

window.setTimeout(function() {
    alert("Merci d’avoir visité notre page !");
}, 5000);


/* resume

// Affiche les informations du navigateur
let infoNavigateur = document.getElementById("infoNavigateur");
let infoFenetre = document.getElementById("infoFenetre");

infoNavigateur.textContent = "Navigateur : " + window.navigator.userAgent;
infoFenetre.textContent = "Dimensions de la fenêtre : " + window.innerWidth + "x" + window.innerHeight;

// Demande le nom de l'utilisateur
let nomUtilisateur = window.prompt("Quel est votre nom ?");
if (nomUtilisateur) {
   document.querySelector("h1").textContent = "Bienvenue, " + nomUtilisateur + " !";
} else {
   document.querySelector("h1").textContent = "Bienvenue sur la Page Interactive !";
}

// Changer la taille de la fenêtre
let boutonTaille = document.getElementById("changerTaille");
boutonTaille.addEventListener("click", function() {
   window.resizeTo(800, 600);
   infoFenetre.textContent = "Dimensions de la fenêtre : " + window.innerWidth + "x" + window.innerHeight;
});

// Changer le contenu de la page
let boutonContenu = document.getElementById("changerContenu");
boutonContenu.addEventListener("click", function() {
   let nouveauParagraphe = document.createElement("p");
   nouveauParagraphe.textContent = "Voici un nouveau contenu ajouté à la page.";
   document.body.appendChild(nouveauParagraphe);
});

// Affiche un message après un délai de 5 secondes
window.setTimeout(function() {
   alert("Merci d’avoir visité notre page !");
}, 5000);


*/