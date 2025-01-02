// 1. Destructuring (Déstructuration)
    // 1. Déstructuration d'objet :

    // Crée un objet person avec les propriétés name, age et city.
    // Utilise la déstructuration pour extraire ces propriétés dans des variables séparées.

    const person1 = {
        name: "Abdoulaye",
        age: 21,
        city: "Liège"
    }
        
    let {name, age, city} = person1
    
    console.log(`Je me Nomme ${name}, J'ai ${age}, et je vis à ${city}`)

    // 2. Déstructuration de tableau :

    // Crée un tableau contenant trois éléments : "apple", "banana", "cherry".
    // Utilise la déstructuration pour extraire les valeurs dans des variables distinctes.

        const fruits2 = [
            "appale",
            "banana",
            "cherry"
        ]

        let {[0]:a1, [1]:a2, [2]:a3} = fruits2 // quand le tableau est en array c'est à dire "[]" il faut mettre l'index des nous destructing

        console.log(`j'adore le jus de ${a1}, pour le ${a2} je le prefere en fruits, quand au ${a3} je le prefere dans les deux formes`)
        console.log(a1, a2, a3)

    // 3. Valeurs par défaut :

    // Déstructure un objet qui contient firstName et lastName. Si une propriété est manquante, donne-lui une valeur par défaut.

        const person3 = {
            firstName : "Abdoulaye",
            lastName : "Bayo",
        }

        let {firstName : prenom = "Inconnu", lastName: nom = "Inconnu", age : age2 = "Inconnu"} = person3

        console.log(prenom)
        console.log(nom)
        console.log(age2)

// 2. Template literals (Littéraux de gabarit)
    // 1. Concaténation simple :

    // Crée une variable name et une variable city.
    // Utilise un template literal pour afficher une phrase comme : "Je m'appelle [name] et je vis à [city]."

    const name2 = "Abdoulaye"
    const city2 = "Liège"

    console.log(`Je m'appelle ${name2} et je vis à ${city2}`)

    // 2. Expressions dans les littéraux :

    // Crée une variable a égale à 5 et une variable b égale à 10.
    // Utilise un template literal pour afficher : "Le résultat de 5 + 10 est 15."

    const aTemplate = 5
    const bTemplate = 10

    console.log(`Le résultat de ${aTemplate} + ${bTemplate} est ${aTemplate + bTemplate}`)

    // 3. Multilignes :

    // Crée une chaîne de caractères multilignes pour représenter une adresse (nom, rue, ville).

    let nomsTemplate = "Abdoulaye"
    let rueTemplate = "Hesbaye"
    let villeTemplate = "Liège"

    console.log(
        `
    noms : ${nomsTemplate}
    rue : ${rueTemplate}
    ville : ${villeTemplate}
        `
    )

// 3. Modules (Import/Export)
    // 1. Création de modules :

    // Crée un fichier mathOperations.js qui exporte deux fonctions : add(a, b) et multiply(a, b).
    // Dans un autre fichier, importe ces fonctions et utilise-les.

    import {add, multiply} from "./mathOperations.js"

    console.log(add(5, 10))
    console.log(multiply(5, 10))


    // 2. Export par défaut :

    // Crée un module qui exporte une fonction par défaut, comme une fonction greet(name) qui retourne "Hello, [name]!".
    // Importe et utilise cette fonction.

    import greet from "./mathOperations.js"

    greet("Abdoulaye")

    // 3. Renommage des imports :

    // Ajoute plusieurs exports dans un module et montre comment les importer en les renommant.

    import {add1 as addition, multiply1 as multiplication, soustraction1 as soustraction, division1 as division} from "./mathOperations.js"

    console.log(addition(10, 15))
    console.log(multiplication(5, 10))
    console.log(soustraction(5, 2))
    console.log(division(4, 2))

// 4. Classes and Inheritance (Classes et héritage)
    // 1. Création d'une classe :

    // Crée une classe Animal avec un constructeur prenant name et species.
    // Ajoute une méthode speak() qui retourne une phrase comme : "Je suis un [species] et je m'appelle [name]."

    class Animal{
        constructor(name, species) {
            this.name = name;
            this.species = species;
        }

        speak() {
            return(`Je suis un ${this.name} et je m'appelle ${this.species}`)
        }
    }

    const Animal1 = new Animal("car", "felin")
    console.log(Animal1.speak())

    // 2. Héritage :

    // Crée une classe Dog qui hérite de la classe Animal.
    // Ajoute une méthode spécifique bark() qui retourne : "Woof! Woof!"

    class Dog extends Animal{
        constructor(name, species, breed = "obscure, inconnu") {
            super(name, species)
            this.breed = breed
        }

        bark() {
            return (
                "WOOF!, WOOF!" 
            )
                
            
        }
    }

    const Dog1 = new Dog("Woof", "Woof !")

    console.log(Dog1.bark())
    console.log(Dog1.speak())

    // 3. Getters et setters :

    // Ajoute une propriété age à la classe Animal.
    // Crée un getter et un setter pour cette propriété.


    class Animal2{
        constructor(name, species) {
            this.name = name;
            this.species = species;
            this._age = 0;  // L'underscore est une convention pour indiquer une propriété privée
        }

        get age() {
            return this._age
        }

        set age(value) {
            if (value < 0) {
                console.log("L'age ne peut pas être négatif")
            } else {
                this._age = value; // Si la valeur est valide, on la stocke dans '_age'
            }

        }

        speak() {
            return `Je suis un ${this.species}, et je m'appelle ${this.name}`
        }        

    }

    const animal1 = new Animal2("Rex", "Chien")

    console.log(animal1.age)

    animal1.age = 5
    console.log(animal1.age)

    animal1.age = -3 
    console.log(animal1.age)