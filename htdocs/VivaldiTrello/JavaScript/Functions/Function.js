// 1. Création d’une fonction qui dit bonjour

// Imagine une fonction qui prend un paramètre, par exemple un prénom.
// Cette fonction doit afficher une phrase qui inclut ce prénom, comme si elle disait bonjour à la personne.
// Pense à ce qu’il se passe si tu appelles cette fonction plusieurs fois avec des prénoms différents.

function sayHello(name) {
    let name1 = "Alice";
  document.write(`Bonjour ${name} ${name1} !` + "<br>");
}
sayHello("Bob");

// 2.  Addition simple

// Réfléchis à une fonction qui reçoit deux nombres.
// Ces nombres doivent être additionnés, et la fonction doit renvoyer le résultat.
// Essaie ensuite de faire afficher ce résultat.

function addition(a, b) {

    return a + b

}
document.write(addition(2, 3 + "<br>"))

// 3. Fonction carré

// Crée une fonction qui prend un nombre, le multiplie par lui-même et renvoie le résultat.
// Pense à tester cette fonction avec plusieurs nombres.

function carre(a) {
    return a * a
}

document.write(carre(2) + "<br>")

// 4. Conversion Celsius-Fahrenheit

// Connais-tu la formule pour convertir une température ? Si non, voici un indice : (température en Celsius) * (9/5) + 32.
// La fonction doit prendre une valeur en Celsius et te donner la valeur correspondante en Fahrenheit.

function Conversion(temp) {
    return temp * (9 / 5) + 32
}

document.write(Conversion(20) + "<br>")

// 5. Vérification d’un nombre pair

// Cette fonction doit te dire si un nombre est pair ou impair.
// Rappelle-toi : un nombre est pair si le reste de sa division par 2 est égal à 0. Sinon, il est impair.

let pairNombre = Math.floor(Math.random() * 10)

function pair(a) {
    if (a % 2 == 0) {
        return "Pair"
    } else {
        return "Impair"
    }
}

document.write(pair(pairNombre) + "<br>")

// Exercices intermédiaires :
// 6.  Fonction avec une valeur par défaut

// Si tu ne donnes pas de valeur à un paramètre, la fonction devrait utiliser une valeur par défaut.
// Par exemple, si tu appelles la fonction sans préciser de message, elle pourrait simplement dire "Bonjour" au lieu d’afficher une erreur.

function sayHello(name = "Alice") {

    document.write(`Bonjour ${name} !` + "<br>")
    
}

sayHello() // Bonjour Alice
sayHello("Bob") // Bonjour Bob

// 7. Trouver le maximum

// Imagine que tu as trois nombres.
// Ta fonction doit comparer ces trois nombres pour trouver celui qui est le plus grand.
// Réfléchis aux étapes nécessaires pour comparer chaque paire de nombres.

let nombre1 = 10
let nombre2 = 20
let nombre3 = 15

function compare() {
    if (nombre1 > nombre2 ) {
        document.write(`cette nombre est le plus grand ${nombre1}`)
    } else if (nombre2 > nombre3) {
        document.write(`cette nombre est le plus grand ${nombre2}`)
    } else {
        document.write(`cette nombre est le plus grand ${nombre3} `)
    }
    console.log(nombre1, nombre2, nombre3)
}
document.write(compare() + "<br>")

// 8. Table de multiplication

// Imagine une table de multiplication, par exemple pour le chiffre 2 : 2x1, 2x2, jusqu’à 2x10.
// La fonction doit afficher une table similaire, mais pour n’importe quel nombre donné.

let tableMultiplicationNombre = Math.floor(Math.random() * 12)

function tableMultiplication(nombre) {
    for (i = 1; i <= 10; i++) {
        document.write(`${nombre} x ${i} = ${i * nombre} <br> `)
    }
}

tableMultiplication(tableMultiplicationNombre) + "<br>"

// 9. Mot inversé

// Prends un mot, par exemple "chat".
// Réfléchis à comment tu pourrais réorganiser les lettres pour afficher "tahc".
// Ta fonction doit faire cela pour n’importe quel mot.

function MotInverse(mot) {
    
    let lettres = mot.split("")
    let lettresInverse = lettres.reverse()
    let motInverser = lettresInverse.join("")
    console.log(motInverser)
    return motInverser // tahc
    
}

document.write(MotInverse("chat") + "<br>")

// 10. Compte les voyelles

// Une voyelle est une lettre comme "a", "e", "i", "o", "u".
// Ta fonction doit parcourir chaque lettre d’un mot ou d’une phrase et compter combien de voyelles elle contient.

// function compterVoyelles(phrase) {
//     const voyelles = ["a", "e", "i", "o", "u"]

//     let compteur = 0

//     let lettres = phrase.toLowerCase()
//     lettres.split()

//     for (i = 0; i < lettres.length; i++) {
//         if (voyelles.includes(lettres[i])) {
//             document.write(lettres[i])
//             compteur++ // OU compteur += 1
//         }
//     }

//     return compteur
// }

// let resultat = compterVoyelles("Bonjour je refais ceci après 18h de temps")
// document.write(resultat)

function compterVoyelles(phrase) {
    
    const voyelles = ['a', 'e', 'i', 'o', 'u'];

    let compteur = 0
    let lettres = phrase.toLowerCase() // OU let lettres = phrase.toLowerCase().split("")
    lettres.split()

    for (i = 0; i < lettres.length; i++) {

        if (voyelles.includes(lettres[i])) {

            document.write( lettres[i] + " " )
            compteur += 1 // OU compteur++
        }
    }
    return compteur
}

let resultat = compterVoyelles("Bonjour tout le monde")
document.write( resultat + "<br>")

// Exercices avancés :
// 11. Factorielle d’un nombre

// La factorielle d’un nombre est le produit de tous les entiers jusqu’à ce nombre. Par exemple, 5! = 5 x 4 x 3 x 2 x 1.
// Ta fonction doit calculer la factorielle pour n’importe quel nombre donné.

// function factorielle(nombre11) {
//     let resultat = 1; // Initialise le résultat à 1
//     let calcul = ""

//     for (let i = 1; i <= nombre11; i++) {
//         resultat *= i; // Multiplie le résultat par le numéro courant
//         calcul += (i === 1) ? `${i}` : ` x ${i}`; // Ajoute l'étape actuelle
//     }

//     return `${calcul} = ${resultat}`; // Retourne le calcul complet avec le résultat final
//     // return resultat; // Retourne le résultat final
// }

// // Appel de la fonction et affichage du résultat
// let nombre = 10;
// let resultatFinal = factorielle(10);
// document.write(`La factorielle de 10 est ${resultatFinal} `);

function factorielle(nombre11) {
    let resultat = 1
    let calcul = ""

    for (i = 1; i <= nombre11; i++) {
        resultat *= i
        calcul += (i === 1) ? `${i}` : ` x ${i}`
    }
    console.log(resultat) // 3628800
    console.log(calcul) // 1 x 2 x 3 x 4 x 5
    
    return `${calcul} = ${resultat}` // "1 x 2 x 3 x 4 x 5 = 3628800"
}
let nombre = 10
let resultaFinalt = factorielle(nombre)
document.write(`le factorielle de ${nombre} est ${resultaFinalt} <br>`)

// 12. Palindrome

// Un palindrome est un mot qui se lit de la même manière dans les deux sens, comme "radar".
// La fonction doit vérifier si un mot est un palindrome en comparant les lettres au début et à la fin.


function palindrome(mot12) {

    let mot = mot12
    let lettres = mot12.toLowerCase().split("")
    let lettresInverser12 = lettres.reverse()
    let lettresRinverser12 = lettresInverser12.join("")

    if (lettresRinverser12 === mot) {
        document.write(`ton "${mot}" est palindrome c'est à dire "${lettresRinverser12}"`)
    } else {
        document.write(`ton ${mot} n'est pas palindrome c'est à dire ${lettresRinverser12}`)
    }

    console.log(mot)
    console.log(lettresRinverser12)

}
let motPalindrome = window.prompt("Entre un mot pour savoir s'il est palindrome")

// Vérification : mot valide
if (motPalindrome && /^[a-zA-Z]+$/.test(motPalindrome)) {
    palindrome(motPalindrome);
} else {
    document.write("S'il vous plaît, entrez un mot valide (seulement des lettres)." + "<br>");
}
palindrome(motPalindrome)


// 13. Trouver l’index

// Imagine une liste de mots ou de nombres, par exemple ["chat", "chien", "oiseau"].
// La fonction doit te donner l’index d’un élément que tu cherches, ou te dire qu’il n’existe pas.

function index(mot) {
    const mot13 = ["chat", "chien", "vache", "poisson", "crabe"]

    let indexMot = mot13.indexOf(mot)
    console.log(indexMot)
    console.log(mot)
    if (indexMot !== -1) {
        document.write(`<br>L'element "${mot}" se trouve dans l'index ${indexMot} <br>`)
    } else {
        document.write(`<br> L'élément "${mot}" n'existe pas dans la liste.<br>`);
    }
}
let mot13Entrer = prompt("Entre un mot")
index(mot13Entrer)


// 14. Compter les mots

// Ta fonction doit analyser une phrase et compter combien de mots elle contient.
// Réfléchis à ce qui sépare les mots (indice : souvent un espace).

function compterMots(mot) {

    let mot14 = mot.split(" ")

    return mot14.length

}

document.write(compterMots("Bonjourno como estace ?"))

// 15. Somme des carrés

// Prends une liste de nombres. Par exemple, [2, 3, 4].
// Ta fonction doit calculer le carré de chaque nombre (par exemple, 2², 3², 4²) et en faire la somme.

function carreSome() {
    const listNombre15 = [2, 3, 4, 6, 8]
    let resultat = 0
    for (let i = 0; i < listNombre15.length; i++) {
        resultat += listNombre15[i] * listNombre15[i]
    }
    console.log(resultat)
    return resultat
}

document.write("<br>" + "le resultat des carre au produit : " + carreSome() + "<br>")

// Exercices sur les fonctions imbriquées :
// 16. Calculatrice

// Imagine une fonction qui prend deux nombres et une opération (comme +, -, *, /).
// Elle doit effectuer l’opération et retourner le résultat.
// Tu pourrais créer des fonctions internes pour chaque opération.


function calculatrice(a, b, operation) {

    function addition() {
        return a + b
    }

    function soustraction() {
        return a - b
    }

    function multiplication() {
        return a * b
    }

    function division() {
        if (b === 0) {
            return "Désolé... Nous ne pouvons pas diviser par zéro"
        }

        return a / b
    }

    if (operation === "+") {
        return addition()
    } else if (operation === "-") {
        return soustraction()
    } else if (operation === "*") {
        return multiplication()
    } else if (operation === "/") {
        return division()
    } else {
        return "Operation non valide"
    }
 
}
let premierNombre = Number(window.prompt("Entre ton premier nombre"))
let deuxièmeNombre = Number(window.prompt("Entre ton deuxième nombre"))
let operationNombres = window.prompt(`Maintenant entre l'operateur que tu veux pour sois additioner,soustraire,multiplier ou divisé tes deux nombres que tu viens d'entrée`)

document.write(calculatrice(premierNombre, deuxièmeNombre, operationNombres) + "<br>")

// 17. Générateur de salutation

// Ta fonction principale doit en créer une autre qui prend un nom et génère une salutation.
// Par exemple, la première fonction pourrait ajouter des détails comme "Bonjour" ou "Salut" automatiquement.

function generateSalutation() {
    
    return function(nom) {
        return `Bonjour, ${nom} !`
    }
}

let saluer = generateSalutation()
document.write("<br>" + saluer( "COUCOU") + "<br>")

// 18. Nombre parfait

// Un nombre parfait est égal à la somme de ses diviseurs propres (par exemple, 6 = 1 + 2 + 3).
// Ta fonction doit trouver ces diviseurs et vérifier si leur somme correspond au nombre.

function nombreParfait(nombre18) {
    
    let compteur = 0
    console.log(nombre18)

    for (let i = 1; i < nombre18; i++) {

        if (nombre18 % i === 0) {
            compteur += i
        }

    }
    console.log(compteur)

    if (compteur === nombre18) {
        
        return "ton nombre est parfait"
    } else {
        
        return "ton nombre est inparfait"
    }
    
}

document.write(nombreParfait(6) + "<br>")

// 19. Compose

// Crée une fonction qui combine deux autres fonctions.
// Par exemple, la première pourrait ajouter 2 à un nombre, et la deuxième pourrait multiplier le résultat par 3.

function ajouter2(x) {
    return x + 2
}

function multiplierPar3(x) {
    return x * 3
}

function composer(func1, func2, valeur) {
    return func2(func1(valeur))
}

document.write(composer(ajouter2, multiplierPar3, 5) + "<br>")


// 20. Jeu des dés

// Simule deux dés. La fonction doit retourner le total et indiquer si les deux dés montrent la même valeur (c’est un double).
// Réfléchis à comment générer des nombres aléatoires.

function lancerDes() {
    
    let de1 = Math.floor(Math.random() * 6) + 1
    let de2 = Math.floor(Math.random() * 6) + 1

    let total = de1 + de2

    let message = (de1 === de2) ? "c'est un double" : "c'est n'est pas un double"

    return `resultat des dès: ${de1} et ${de2}. Total : ${total}. ${message}`
}

document.write(lancerDes())