document.write("None" + "<br>")

// 1. Vérification d'un nombre positif :

// Demande un nombre à l'utilisateur via un prompt.
// Utilise une condition if-else pour vérifier si le nombre est supérieur à 0.
// Affiche soit "Positif" soit "Négatif" dans la console ou sur la page.

let nombres = Number(window.prompt("Entre un nombre pour savoir s'il est positif ou négaif"))

if (nombres > 0 ) {
    document.write("Positif" + "<br>")
} else {
    document.write("Négatif" + "<br>")
}


// 2. Comparaison de deux nombres :

// Demande deux nombres distincts à l'utilisateur.
// Utilise plusieurs if-else pour comparer les nombres et afficher "Plus grand", "Plus petit", ou "Égal".

let premierNombres = Number(window.prompt("Entre le premier nombre"))
let deuxiemeNombres = Number(window.prompt("et maintenat le dernier"))

if (premierNombres > deuxiemeNombres) {
    document.write("premierNombres est plus grand" + "<br>")
} else if (premierNombres < deuxiemeNombres) {
    document.write("premierNombres est plus petit que deuxiemeNombres" + "<br>")
} else {
    document.write("premierNombres est égal à deuxièmeNombres" + "<br>")
}

// 3. Pair ou impair :

// Demande un nombre entier à l'utilisateur.
// Utilise le modulo (%) pour déterminer si le nombre est divisible par 2.
// Affiche "Pair" si le reste est 0, sinon "Impair".

let nombreEntier = Number(window.prompt("Entre un nombre entier"))
let nombreEntier2 = Math.floor(Math.random() * 10)

if (nombreEntier % 2 === 0) {
    document.write("Pair" + "<br>")
} else {
    document.write("Impair" + "<br>")
}

if (nombreEntier2 % 2 === 0) {

    document.write("Pair" + "<br>")

} else {
    document.write("Impair" + "<br>")
}


// 4. Catégorisation d'âge :

// Demande l'âge de l'utilisateur.
// Divise l'âge en différentes catégories :
// "Enfant" si 0 ≤ âge ≤ 12.
// "Adolescent" si 13 ≤ âge ≤ 17.
// "Adulte" si âge ≥ 18.
// Utilise des conditions if, else if, et else.

let age4 = Number(window.prompt("Quel age avez-vous"))

if (0 < age4 <12  ) {

    document.write("va dormir Gros Bébé" + "<br>")

} else if (13 > age4 < 17) {
    document.write("Adolescent" + "<br>")
} else if (age4 > 18) { 
    document.write("Adulte " + "<br>")
} else {
    console.log(age4)
}




// 5. Meilleure note :

// Demande trois notes à l'utilisateur.
// Compare les trois pour trouver la plus grande avec des if-else.
// Affiche cette note.

let premierNotes = Math.floor(Math.random() * 10)
let deuxiemeNotes = Math.floor(Math.random() * 10)
let troisiemeNotes = Math.floor(Math.random() * 10)

if (premierNotes > deuxiemeNombres && premierNotes > troisiemeNotes) {
    document.write("premierNotes est le plus grand de tous" + "<br>")
} else if (deuxiemeNotes > premierNotes && deuxiemeNotes > troisiemeNotes) {
    document.write("DeuxiemeNotes est le plus grand des tous" + "<br>")
} else if (troisiemeNotes > premierNotes && troisiemeNotes > deuxiemeNombres) {
    document.write("TroisiemeNotes est le plus grand des tous" + "<br>")
} else {
    document.write("none of them are bigger" + "<br>")
}


// Exercices intermédiaires :


// 6. Jour de la semaine :

// Demande un chiffre (1-7) à l'utilisateur.
// Utilise un switch pour afficher le jour correspondant (par exemple, 1 = Lundi, 2 = Mardi, etc.).

let chiffresDemandeJour = Math.floor(Math.random() * 7)

switch (chiffresDemandeJour) {
    case 0:
        chiffresDemandeJour = "Lundi"
        break;
    case 1:
        chiffresDemandeJour = "Mardi"
        break;
    case 2:
        chiffresDemandeJour = "Mercredi"
        break;
    case 3:
        chiffresDemandeJour = "Jeudi"
        break;
    case 4:
    chiffresDemandeJour = "Vendredi"
    break;
    case 5:
    chiffresDemandeJour = "Samedi"
    break;
    case 6:
    chiffresDemandeJour = "Dimache"
    break;

    default:
        break;
}

document.write(chiffresDemandeJour + "<br>")

// 7. Validation de mot de passe :

// Demande un mot de passe à l'utilisateur via un prompt.
// Vérifie si le mot de passe est correct (par exemple, "1234").
// Affiche "Accès autorisé" si le mot de passe est correct, sinon "Accès refusé".

let motDePassePrompt = Number(window.prompt("quel est ton mot de passe de 4 chiffre ?"))

if (motDePassePrompt === 1234) {
    document.write("Accès autorisé" + "<br>")
} else {
    document.write("Accès refusé" + "<br>")
}


// 8. Traduction d'un mot :

// Propose trois mots français : "chat", "chien", "oiseau".
// Utilise un switch pour afficher leur traduction en anglais.

let mot = window.prompt("Entrez un mot (chat, chien, oiseau").toLowerCase()

switch (mot) {
    case "chat" :
        document.write("Cat - un petit animal mignon" + "<br>")
        break;
    case "chien" :
        document.write("Dog - un compagnon fidèle" + "<br>")
        break;
    case "oiseau" :
        document.write("Bird - un créature qui vole" + "<br>")
        break;
    default: 
        document.write(`"${mot}" n'est pas dans la listes des mots traduits ` + "<br>")
}

const mots = [ 
    "chat",
    "chien",
    "oiseau"
]

const motAleatoire = mots[Math.floor(Math.random() * mots.length)];

switch (motAleatoire) {
    case "chat" :
        document.write(`"${motAleatoire}" Cat - (un petit animal mignon)`  + "<br>");
        break;
    case "chien" :
        document.write(`"${motAleatoire}" Dog - (un compagnon fidèle)`  + "<br>");
        break;
    case "oiseau" :
        document.write(`"${motAleatoire}" Bird - (un créature qui vole)`  + "<br>");
        break;
    default:
        console.log(motAleatoire)
        document.write(`"${motAleatoire}" n'est pas dans la listes des mots traduits ` + "<br>")
}


// 9. Saisons :

// Demande un mois sous forme de chiffre (1-12).
// Utilise un if-else ou un switch pour afficher la saison :
// Hiver : décembre à février (12, 1, 2).
// Printemps : mars à mai (3, 4, 5).
// Été : juin à août (6, 7, 8).
// Automne : septembre à novembre (9, 10, 11).

let moisAnneeChiffre = Math.floor(Math.random() * 12) + 1

switch (moisAnneeChiffre) {
    case 1:
    case 2:
    case 12: // I JUST DISCOVER I CAN CLASS THEM THIS WAY HEHEHEHAHAHAHAHAHAHAAAHAAHAHAAAHAHAHAHAHAHAHAHAHA
        document.write("Hiver")
        break;
    case 3:
    case 4:
    case 5:    
        document.write("Printemps")
        break;
    case 6:
    case 7:
    case 8:
        document.write("Eté")
        break;
    case 9:
    case 10:
    case 11:
        document.write("Automne")
        break;
    default:
        console.log("Mois Invalide")
        document.write("Mois Invalide")
}


// 10. Multiple de 3 ou 5 :

// Demande un nombre à l'utilisateur.
// Utilise if-else pour vérifier si le nombre est divisible par 3, par 5, ou aucun des deux.
// Affiche le message correspondant.

let nombre10 = Math.floor(Math.random() * 100) + 1

if (nombre10 % 3 === 0 || nombre10 % 5 === 0) {
    document.write(nombre10 + " est bien divisible par 3 et 5")
} else {
    document.write("Ton " + nombre10 + " n'est pas du tout divsible par 3 et 5")
}



// Exercices avancés :

// 11. Calcul de prix avec réduction :

// Demande un prix initial.
// Si le prix est supérieur à 100, applique une réduction de 20 % (utilise une multiplication).
// Affiche le prix final après la réduction.

let prixInitial = Math.floor(Math.random() * 1000) + 100

if (prixInitial >= 100 ) {

    let reduction = prixInitial * 0.20
    let prixFinal = prixInitial - reduction

    document.write("après 20% de reduction de notre part voici maintenant ton prix : " + prixFinal)

}

// 12. Catégorisation de température :

// Demande une température à l'utilisateur.
// Catégorise-la selon :
// "Froid" (température ≤ 10).
// "Normal" (11 ≤ température ≤ 25).
// "Chaud" (température > 25).
// Utilise des if-else.

let temperatures12 = Math.floor(Math.random() * 30)

if (temperatures12 < 10) {
    document.write("Froid")
} else if (11 < temperatures12 < 25) {
    document.write("Normal, respire enfin")
} else if (temperatures12 > 25) {
    document.write("Chaud, ne va surtout pas dans les centres commercial ou des endroit du genre, tu verra que des gens à poils")
} else {
    document.write(temperatures12)
}


// 13. Jeu des devinettes :

// Génére un nombre aléatoire entre 1 et 10 avec Math.random().
// Demande à l'utilisateur d'entrer un nombre.
// Compare le nombre entré avec le nombre généré et affiche si c'est correct ou non.

let nombreAleatoire13 = Math.floor(Math.random() * 10) + 1
let nombresDemande = Math.floor(Math.random() * 10) +1

if (nombreAleatoire13 === nombresDemande) {
    document.write("C'est correct ")
}  else {
    document.write("C'est n'est pas correct")
}


// 14. Vérification d'heures :

// Demande une heure (0-23).
// Utilise if-else pour déterminer si c'est :
// "Matin" (0-11).
// "Après-midi" (12-17).
// "Soir" (18-23).

let heure14 = Math.floor(Math.random() * 23)

if (0 >= heure14 <= 11) {
    document.write("Matin")
} else if ( 12 >= heure14 <= 17) {
    document.write("Après-midi")
} else if (18 >= heure14 <= 23) {
    document.write("Soir")
} else {
    document.write(heure14)
}


// 15. Calculatrice simple :

// Demande deux nombres et une opération (+, -, *, /).
// Utilise un switch pour effectuer l'opération choisie.
// Affiche le résultat.
// Exercices avec logique imbriquée :

let nombrePremier15 = Number(window.prompt("entré le premier nombre : "))
let nombreDeuxieme15 = Number(window.prompt("entre le deuxiem nombre :"))

let Opération = window.prompt("entre une opération (+, -, *, /) :")

switch (Opération) {
    case "+":
        document.write(nombrePremier15 + nombreDeuxieme15)
        break
    case "-": 
        document.write(nombrePremier15 - nombreDeuxieme15)
        break
    case "*":
        document.write(nombrePremier15 * nombreDeuxieme15)
        break
    case "/": 
        document.write(nombrePremier15 / nombreDeuxieme15)
}   

// 16. Admission à une activité :

// Demande l'âge et si l'utilisateur a une autorisation parentale (oui ou non).
// Affiche "Admis" si l'âge est ≥ 18 OU si l'utilisateur a une autorisation parentale.
// Sinon, affiche "Non admis".

let age16 = Math.floor(Math.random() * 21) + 1
let permission16 = true

if (age16 > 18 && permission16) {
    document.write("Admis")
} else {
    document.write("Non admis")
}



// 17. Jeu des trois portes :

// Demande à l'utilisateur de choisir une porte parmi trois (1, 2, 3).
// Utilise un switch pour afficher une récompense ou un message pour chaque porte.

let jeuxTrois = Math.floor(Math.random() * 3) + 1

switch(jeuxTrois) {
    case 1:
        document.write("Vous avez gagné un voyage à Paris")
        break
    case 2:
        document.write("Vous avez gagné une voiture")
        break
    case 3:
        document.write("Vous avez gagné une maison")
        break
    default:
        document.write("Vous avez perdu")
}


// 18. Catégorisation par taille :

// Demande une taille en cm.
// Utilise des if-else pour afficher :
// "Petit" si la taille est < 150 cm.
// "Moyen" si 150 ≤ taille ≤ 180 cm.
// "Grand" si la taille > 180 cm.

let taille18 = Math.floor(Math.random() * 180) + 1

if (taille18 < 150) {
    document.write("Petit")
} else if (150 <= taille18 <= 180) {
    document.write("Moyen")
} else if (taille18 > 180) {
    document.write("Grand")
} else {
    document.write(taille18)
}

// 19. Validation d'un triangle :

// Demande trois longueurs de côté.
// Utilise des if-else pour vérifier si :
// La somme de deux côtés est toujours > au troisième.
// Si c'est valide, affiche "Triangle valide". Sinon, "Triangle invalide".

let cote1 = Math.floor(Math.random() * 10) + 1
let cote2 = Math.floor(Math.random() * 10) + 1
let cote3 = Math.floor(Math.random() * 10) + 1

if (cote1 + cote2 > cote3 || cote1 + cote3 > cote2 || cote2 + cote3 > cote1) { 
    document.write("Triangle valide")
}
else {
    document.write("Triangle invalide")
}


// 20. Notation scolaire :

// Demande une note entre 0 et 20.
// Utilise if-else pour attribuer une lettre selon la note :
// A : 16-20.
// B : 12-15.
// C : 8-11.
// D : < 8.

let note20 = Math.floor(Math.random() * 20) + 1

if (note20 >= 16) {
    document.write("A")
} else if (note20 >= 12) {
    document.write("B")
}
else if (note20 >= 8) {
    document.write("C")
}
else {
    document.write("D")
}
