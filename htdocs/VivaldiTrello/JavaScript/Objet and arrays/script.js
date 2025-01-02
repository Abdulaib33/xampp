// Exercices de base avec les tableaux :
// 1. Ajout d'éléments dans un tableau

// Crée un tableau vide et ajoute trois éléments en utilisant push().
// Ajoute un élément au début avec unshift().
// Supprime le dernier élément avec pop() et le premier avec shift().

const exercise1 = []

exercise1.push("Coucou")
exercise1.unshift("héhéhé")
// exercise1.pop()
// exercise1.shift()

console.log(exercise1)

// 2. Accès aux éléments

// Crée un tableau contenant les jours de la semaine.
// Affiche le premier et le dernier élément.

const exercise2 = [
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche"
]

console.log(exercise2[0])
console.log(exercise2[6])


// 3. Modification des éléments

// Modifie un élément d’un tableau donné en accédant à son index.


const exercise3 = [
    "Studio 100 TV",
    "Cartoon",
    "Movies"
]

exercise3[2] = "HAHAHAHAHAHAHAHAHAH"

// Exercices intermédiaires :
// 4. Utilisation de map()

// Crée un tableau de nombres.
// Utilise map() pour créer un nouveau tableau où chaque nombre est multiplié par 2.

const exercices4 = [
    1,
    2,
    3,
    4,
    5,
    6
]

const doubleExercices4 = exercices4.map((num) => num * 2)

console.log(`exercices4 premier tableau ${exercices4}`)
console.log(`doubleExercices4 deuxième ${doubleExercices4}`)

// 5. Filtrage avec filter()

// Crée un tableau de nombres.
// Utilise filter() pour créer un nouveau tableau contenant uniquement les nombres pairs.

const exercices5 = [
    1,
    2,
    3,
    4,
    6,
    7,
    8,
    9,
    10
]

const filterExercices5 = exercices5.filter(num => num % 2 == 0)

console.log("HAHAHAHAHHA " + filterExercices5)

// 6. Réduction avec reduce()

// Crée un tableau de nombres.
// Utilise reduce() pour calculer la somme de tous les nombres.

const exercices6 = [
    2,
    4,
    6,
    8,
    10,
    12,
    14,
    16,
    18,
    20
]

const sumExercices6 = exercices6.reduce((accumulateur, currentValue) => {
    return accumulateur + currentValue;
})

console.log(sumExercices6)

// 7. Parcourir avec forEach()

// Crée un tableau contenant des noms.
// Utilise forEach() pour afficher chaque nom avec "Bonjour".

const exercices7 = [

    "Abdoulaye",
    "Luau",
    "js",
    "lua",
    "laravel",
    "sql"

]

// 1ème methode pour l'exercices 7
exercices7.forEach(noms => {
    console.log("Trop Style :" + noms)
})

// 2ème methode pour l'exercices 7
exercices7.forEach(function(noms) {
    console.log("Trop Style :" + noms)
})

// 3ème methode pour l'exercices 7
function direBonjour(noms) {
    console.log("Trop Style :" + noms)
}
exercices7.forEach(direBonjour)


// Exercices avec les objets :
// 8. Création et accès aux propriétés

// Crée un objet représentant une voiture avec des propriétés comme marque, modèle, et année.
// Affiche la marque et le modèle avec la notation par point, puis avec la notation par crochets.


const exercices8 = {
    Marque : "renault",
    Modèle : "scenic",
    Année : 2019
}

console.log("sans crochet :" + exercices8.Marque)
console.log("sans crochet :" + exercices8.Modèle)
console.log("avec crochet :" + exercices8["Marque"])
console.log("avec crochet :" + exercices8["Modèle"])


// Ajout et suppression de propriétés
// 9. Ajoute une propriété couleur à l'objet voiture.
// Supprime la propriété année.

const exercices9 = {
    Marque : "renault",
    Modèle : "scenic",
    Année : 2019,
    couleur : "gris"
}

delete exercices9.Année
console.log(exercices9) // sans les ... c'est bordelique
//console.log(...exercices9) // avec le ... c'est beaucoup mieux, mais je ne sais pas pourquoi ça ne fonctionne pas avec le console.log() en tout cas pas dans notre coas ici

// 10. Tableau d'objets

// Crée un tableau contenant plusieurs objets représentant des étudiants avec des propriétés nom, âge, et note.
// Trouve les étudiants ayant une note supérieure à 15 en utilisant filter().

const exercices10 = [
    {nom : "Abdoulaye", age : 21, note : 20},
    {nom : "Bob", age : 22, note : 12},
    {nom : "Alice", age : 19, note : 16},
    {nom : "Charlie", age : 20, note : 14},
    {nom : "Diane", age : 23, note : 17}
]

const etudiantAvecBonneNoteExercices10 = exercices10.filter(étudiant => étudiant.note > 15)

console.log(etudiantAvecBonneNoteExercices10)

// Exercices avancés :
// 11. Combinaison des méthodes

// Crée un tableau contenant des objets représentant des produits avec des propriétés nom et prix.
// Filtre les produits dont le prix est supérieur à 20, puis utilise map() pour récupérer uniquement leurs noms.

const exercices11 = [
    {nom : "Cookie", prix : 2.99},
    {nom : "yaourth", prix : 4.20},
    {nom : "Laptop", prix : 1200},
    {nom : "Desktop", prix : 1800}
]

const ProduitExercices11 = exercices11.map(produits => produits.nom)

console.log(ProduitExercices11)

// 12. Modification avec map()

// Crée un tableau contenant des objets représentant des articles avec une propriété prix.
// Utilise map() pour créer un nouveau tableau où chaque article a un prix réduit de 10%.

const exercices12 = [
    {articles : "popcorn", prix : 3.49},
    {articles : "cacao", prix : 4.50},
    {articles : "Lait", prix : 10},
    {articles : "pain", prix : 3.23}
]

const articlesExercices12 = exercices12.map(articles => {

    return {
        articles: articles.articles,
        prix: (articles.prix * 0.9).toFixed(2)
    }
        
})

console.log(articlesExercices12)

// 13. Statistiques avec reduce()

// Crée un tableau contenant les notes d’une classe.
// Utilise reduce() pour calculer la moyenne des notes.

const exercices13 = [
    {note : 10},
    {note : 15},
    {note : 17},
    {note : 18},
    {note : 19}
]

const noteExercices13 = exercices13.reduce((accumulateur, currentValue) => {

    return accumulateur + currentValue.note
    
}, 0) / exercices13.length

console.log(noteExercices13)

// 14. Tri avec sort()

// Crée un tableau de nombres et trie-les en ordre croissant.
// Crée un tableau d’objets et trie-les par une propriété comme nom ou âge.

const exercices14 = [
    3,
    2,
    5,
    6,
    8,
    9,
    10,
    12,
]

const nombreExercices14 = exercices14.sort((a, b) => a - b)

console.log(nombreExercices14)

const exercices14Deuxieme = [

    {nom : "Abdoulaye", age : 21},
    {nom : "AlphaOumar", age : 5},
    {nom : "Boubacar", age : 2},
    {nom : "Hawa", age : 17}

]

const trieParAge = exercices14Deuxieme.sort((a, b) => a.age - b.age)

console.log(trieParAge)

// 15. Création dynamique d'objets

// Écris une fonction qui prend deux tableaux, un contenant des noms et un contenant des âges, et qui retourne un tableau d’objets associant chaque nom à un âge.


function exercices15(noms, age) {
    
    const result = []

    for (let i = 0; i < noms.length; i++) {

        const person = {
            nom : noms[i],
            age : age[i]
        }

        result.push(person)

    }

    return result

}

const nomsArray = [
    "Abdoulaye",
    "Maryam",
    "Fatima",
]

const ageArray = [
    "21",
    "12",
    "12"
]

const people = exercices15(nomsArray, ageArray)

console.log(people)





// JUST A RANDOM TEST IT HAS NOTHING TO DO WITH OBJET AND ARRAY, EVEN IF IT DOES IT'S A PURE COINCIDENCE


let first = "im going to run a multiples :)"
console.log(first.repeat(4))

let second = "Me"
console.log(second.startsWith("Me"))

let second1 = "getMe"
console.log(second1.startsWith("Me"), 2)

let third = "getMe"
console.log(third.endsWith("Me"))

let third1 = "alwaysmustEndsWithGetme"
console.log(third1.endsWith("Get"), third1.length - 2)


let me = "im hiding here HEHEHE"
console.log(me.includes("HEHEHE"))


let test1 = ["coucou", "coucou", "hahaha", "hahha", "hahaha", "bonjourno", "bonjour", "bonjourno", "DEHORS"]
console.log(test1)

let redefiniTest1 = new Set(test1) // Dehors les clowns(clone)
console.log(redefiniTest1)

test1 = [redefiniTest1] // c'est bordelique ducoup on va le faire comme au ligne 367
console.log(test1)

test1 = [...redefiniTest1] // beaucoup mieux, le ... sépare
console.log(test1)