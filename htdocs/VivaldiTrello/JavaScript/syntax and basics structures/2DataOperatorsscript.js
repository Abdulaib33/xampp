// Data Types
// Exercice 1 : String Manipulation
// Crée une variable greeting avec la valeur "Hello".
// Crée une variable name avec ton prénom.
// Combine ces deux chaînes pour afficher "Hello, [ton prénom]!" en utilisant :
// La concaténation avec +.
// Les template literals (backticks ``).

let greeting = "Hello"
let name = "Mickael"
document.write(greeting + ", " + name + "!" + "<br>")

// Exercice 2 : Calculs avec des Numbers
// Déclare deux variables a et b avec des nombres de ton choix.
// Calcule leur somme, différence, produit, quotient, et reste (modulo).
// Affiche chaque résultat dans la console.

let a = 4 
let b = 2
let somme = a + b
let difference = a - b
let produit = a * b
let quotient = a / b
let reste = a % b

document.write(somme + "<br>")
document.write(difference + "<br>")
document.write(produit + "<br>")
document.write(quotient + "<br>")
document.write(reste + "<br>")


// Exercice 3 : Boolean Basics
// Déclare une variable isStudent et assigne-lui la valeur true.
// Utilise une condition pour afficher "You are a student" si c'est vrai, ou "You are not a student" si c'est faux.

let isStudent = true

if (isStudent === true ) {

    document.write("You are a student")

} else {
    document.write("You rae not a student" + "<br>")
}

// Exercice 4 : Travail avec des Objets
// Crée un objet person avec les propriétés :
// name : ton prénom.
// age : ton âge.
// isDeveloper : un booléen indiquant si tu es développeur.
// Affiche les valeurs des propriétés dans la console.
// Change la valeur de age et ajoute une nouvelle propriété language avec "JavaScript".

const person  = { 
    name: "Abdoulaye", 
    age: 21, 
    isDeveloper: true 
}

document.write("<br>" + person.name + "<br>")
document.write(person.age + "<br>")
document.write(person.isDeveloper + "<br>")

person.age = 22
person.language = "Javascript"

document.write(person.age + "<br>" )
document.write(person.language + "<br>")


// Exercice 5 : Manipulation d'Arrays
// Crée un tableau fruits avec trois fruits de ton choix.
// Ajoute un fruit à la fin et un autre au début.
// Supprime le dernier fruit.
// Affiche le tableau final dans la console.

const fruits = ["Kiwi", "Fruit de là passion", "Mangue"]

fruits.push("Fraise")
fruits.unshift("Framboise")
fruits.pop()

for (let i = 0; i < fruits.length; i++) {
    document.write(fruits[i] + "<br>")
}


// Exercice 6 : Conversion de types
// Crée une variable numString avec la valeur "123".
// Convertis-la en un nombre avec Number() et vérifie son type avec typeof.
// Inversement, prends un nombre et convertis-le en chaîne de caractères avec .toString().


let numString = 123
let stringNum = "Hello"
numString = Number(numString)
document.write(typeof(numString) + "<br>")

stringNum = toString(stringNum)
document.write(stringNum + "<br>")



// Exercice 7 : Comparaison de types
// Déclare deux variables x = "5" (string) et y = 5 (number).
// Compare-les avec :
// ==
// ===
// Explique la différence entre les deux opérateurs dans un commentaire.

let x = "5"
let y = 5

if (x == y) {
    document.write("\"5\" " + "\"==\" " + 5)
} else {
    document.write("\"5\" " + "\"===\" " + 5)
} 


// Exercice 8 : Tri d'Array
// Crée un tableau numbers contenant [4, 2, 8, 5].
// Trie ce tableau en ordre croissant et décroissant.
// Affiche les résultats.

const numbers = [4, 2, 8, 5]
numbers.sort()
document.write("<br>" + numbers + "<br>")

// Exercice 9 : Calcul de moyenne
// Crée un tableau grades contenant des notes (nombres).
// Calcule la moyenne des notes.
// Affiche "Passing" si la moyenne est supérieure ou égale à 10, sinon affiche "Failing".

const gradesContenant = [ 18, 10, 8, 9, 20]

for (let i = 0; i < gradesContenant.length; i++) {
    if (gradesContenant[i] >= 10) {
        document.write(gradesContenant[i])
    } else {
        document.write(gradesContenant[i])
    }
}


// Exercice 10 : Propriétés dynamiques
// Crée un objet car avec une propriété brand.
// Ajoute dynamiquement une propriété model et assigne une valeur.
// Supprime la propriété brand.
// Affiche l'objet final.
// Operators


const car = {
    brand: "Renault",
}

car.model = "Scenic"
delete car.brand

const myArray = Object.values(car) // This Display All the values of the Array

document.write("<br>" + car.brand + "<br>") // This is the one that has been deleted
// document.write(car.model)

document.write(myArray) 





// Exercice 11 : Opérateurs arithmétiques
// Crée une variable base = 10.
// Multiplie-la par 2, puis divise-la par 4, puis ajoute 5.
// Affiche le résultat final.

let variableBase = 10

variableBase = variableBase * 2 / 4 + 5

document.write( "<br>" + variableBase)

// Exercice 12 : Opérateurs logiques
// Déclare deux variables :
// hasLicense (booléen)
// age (number)
// Utilise un opérateur logique pour vérifier :
// Si l'utilisateur est majeur ET a un permis.
// Si l'utilisateur est mineur OU n'a pas de permis.

let hasLicense = true
let age12 = 21

if (hasLicense || age12 >= 18) {
    document.write("<br>" + "Tout est majeur et ta un permis a.k.a Abdoulaye meilleur jouer roblox et bientôt meilleur developpeur roblox" + "<br>")
} else {
    document.write("Va dormir gros bébé, tu est encore dans un rêves")
}


// Exercice 13 : Opérateurs de comparaison
// Compare deux nombres avec >, <, >=, <=, ==, !=, ===, !==.
// Écris dans des commentaires si chaque comparaison est vraie ou fausse.

let nombres1st = Math.floor(Math.random() * 10)
let nombres2nd = Math.floor(Math.random() * 20)

if (nombres1st > nombres2nd) {

document.write(+ "<br>" + "first number is > than second")

} else if (nombres1st < nombres2nd) {
    document.write(+ "<br>" + "first number is < than second")

} else if (nombres1st >= nombres2nd) {
    document.write( + "<br>" + "first number is >= than second")


} else if (nombres1st <= nombres2nd) {
    document.write(+ "<br>" + "first number is <= than second")


} else if (nombres1st == nombres2nd) {
    document.write(+ "<br>" + "first number is == than second")

    
} else if (nombres1st != nombres2nd ) {
    document.write(+ "<br>" + "first number is != than second")


} else if (nombres1st === nombres2nd) {
    document.write(+ "<br>" + "first number is === than second")


} else if (nombres1st !== nombres2nd) {
    document.write(+ "<br>" + "first number is !== than second")


} else {
    document.write(+ "<br>" + "MASAKA(impossible) !!!")

}

console.log(nombres1st)
console.log(nombres2nd)


// Exercice 14 : Opérateur de reste (modulo)
// Crée une variable num = 15.
// Vérifie si num est pair ou impair en utilisant % et une condition.

let num14 = 15 

if (num14 % 1 == 0 ) {
    document.write("<br>" + "num14 modulo is " + num14)
} else {
    document.write("<br>" + "whe havent found the modular of 15 %  2" + "<br>")
}


// Exercice 15 : Priorité des opérateurs
// Calcule le résultat de : 10 + 5 * 2 - 8 / 4.
// Ajoute des parenthèses pour modifier l'ordre d'exécution.


let resultat15 = 10

document.write("<br>" + ((((resultat15 + 5) *2) - 8) / 4)+  "<br>")

// Exercice 16 : Combinaisons d'opérateurs
// Déclare une variable score = 0.
// Utilise += pour ajouter 10 au score trois fois.
// Utilise -= pour retirer 5 au score.
// Affiche le résultat final.

let score16 = 0

score16 += 10

score16 -= 5

document.write(score16 +  "<br>")

// Exercice 17 : Opérateur ternaire
// Déclare une variable age = 18.
// Utilise un opérateur ternaire pour afficher "Adult" si age >= 18, sinon "Minor".

let age17 = 18

age17 >= 18 ? document.write("Adult") : document.write("Mineur")


// Exercice 18 : Opérateurs avec Strings
// Crée une variable text = "Java".
// Ajoute "Script" à la fin en utilisant +=.
// Vérifie si text contient "Java" avec .includes().

let text18 = "Java"

text18 += "Script"

let test = text18.includes("Java" + "<br>")

document.write(test + "<br>")
document.write(text18 + "<br>")
// Exercice 19 : Comparaisons entre objets
// Crée deux objets identiques obj1 et obj2.
// Compare-les avec == et ===.
// Ajoute un commentaire expliquant pourquoi les résultats sont comme ils sont.

const obj1 = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"}
const obj2 = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"}

// obj1 == obj2 ? document.write('obj1 is = = to obj2' + "<br>") : document.write('obj1 is not = = to obj2' + "<br>") IM I STUPID DOING IT LIKE THIS ?
// obj1 === obj2 ? document.write('obj1 is = = = to obj2' + "<br>") : document.write('obj1 is not = = = to obj2' + "<br>")

if (obj1 == obj2) { // This is false because the objects are not the same
    document.write("This is true")
} else {
    document.write("This is false")
} 
 
if (obj1 === obj2) { // This is false because the objects are not the same 
    document.write("This is true")
} else {
    document.write("This is false")
}





// Exercice 20 : Boucles et conditions
// Crée un tableau numbers = [1, 2, 3, 4, 5].
// Utilise une boucle pour parcourir le tableau.
// Si le nombre est pair, multiplie-le par 2.
// Si le nombre est impair, soustrais 1.
// Affiche le tableau modifié.

const numbers20 = [
    1, 2, 3, $, 5
]

for (let i = 0; i < numbers20.length; i++) {
    if (numbers20[i] % 2 == 0) {
        document.write(numbers20[i] *= 2)
    } else {
        document.write(numbers20[i] -1)
    }
}