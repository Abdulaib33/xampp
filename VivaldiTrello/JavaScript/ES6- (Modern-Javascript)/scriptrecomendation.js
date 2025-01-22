// Promises et Async/Await
    // 1. Promises :

    // Crée une fonction qui retourne une Promise.
    // Dans la Promise, simule une opération longue avec setTimeout() (par exemple, attendre 3 secondes).
    // Après ce délai, la Promise doit être résolue avec un message comme "Résolu après 3 secondes".
    // Utilise .then() pour afficher ce message dans la console une fois la Promise résolue.

    function delayedMessage() {
        return new Promise((resolve, reject) => {
        console.log("Opération asynchrone en cours...");
            setTimeout(() => {
                resolve("Résolu après 3 seconds")
            }, 3000)
        })
    } 

    delayedMessage()
    .then((message) => {
        console.log(message)
    })

 

    // 2. Async/Await :

    // Réutilise la fonction précédente.
    // Crée une nouvelle fonction marquée async.
    // Appelle la fonction qui retourne la Promise à l'intérieur avec await pour attendre son résultat.
    // Affiche le résultat une fois obtenu avec console.log().

    async function Async2() {
        let result = await delayedMessage()
        console.log(result)
    } 


    // 3. Chainer les Promises :

    // Crée une fonction qui retourne une Promise après 2 secondes.
    // Fais en sorte que cette fonction simule une tâche asynchrone (exemple : "Tâche 1 terminée").
    // Enchaîne trois appels à cette fonction en utilisant .then(), chaque fois avec un message différent (par exemple, "Tâche 2 terminée", "Tâche 3 terminée").

    function Chainer3() {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve(`Tache 1 terminée`)
            }, 2000)
        })
    }
    
    Chainer3()
        .then((resulut) => {
            alert(resulut)
            return resulut
        })
        .then((resulut) => {
            alert("Tache 2 terminée")
            return resulut
        })
        .then((resulut) => {
            alert("Tache 3 terminées")
            return resulut
        })

// Rest et Spread Operators
    // 4. Rest Operator :

    // Crée une fonction qui accepte plusieurs arguments.
    // Utilise le Rest Operator (...args) pour regrouper tous les arguments dans un tableau.
    // Parcours ce tableau et calcule leur somme.
    // Retourne la somme totale.


    // 5. Spread Operator :

    // Crée deux tableaux distincts avec des éléments comme [1, 2, 3] et [4, 5, 6].
    // Utilise le Spread Operator pour combiner les deux tableaux en un seul.
    // Ajoute un nouvel élément au début (par exemple, 0) et un autre à la fin (par exemple, 7).

    let spread1 = [1, 2, 3]
    let spread2 = [...spread1,4, 5, 6]

    console.log(...spread2)

// Arrow Functions
    // 6. Simple Arrow Function :

    // Transforme une fonction classique (par exemple, une fonction qui ajoute deux nombres) en une fonction fléchée.
    // Assure-toi de comprendre la différence syntaxique entre les deux.

        // function add(a, b) {
        //     return a + b
        // }  
        // alert(add)

        let add = (a,b) => a + b

        alert(add(2, 1))


    // 7. Map avec Arrow Functions :

    // Crée un tableau de nombres comme [1, 2, 3, 4, 5].
    // Utilise map() avec une fonction fléchée pour doubler chaque nombre.
    // Assure-toi que le nouveau tableau contient les valeurs doublées.

    let Map7 = [1, 2, 3, 4, 5]

    // const Map7Map = Map7.map()


// Map et Set
    // 8. Map :

    // Crée une instance de Map.
    // Ajoute des entrées où la clé est un nom d’étudiant et la valeur est sa note.
    // Ajoute au moins trois entrées différentes.
    // Utilise get() pour afficher la note d’un étudiant spécifique.


    let map = new Map()

    map.set("Abdoulaye", 20)
    map.set("Abdoulaye1", 201)
    map.set("Abdoulaye2", 202)

    alert(map.get("Abdoulaye"))
    alert(map.get("Abdoulaye1"))
    alert(map.get("Abdoulaye2"))

    // 9. Set :

    // Crée une instance de Set.
    // Ajoute des éléments comme "pomme", "banane", et "pomme" à ce Set.
    // Assure-toi qu’un élément dupliqué n’est pas ajouté deux fois.
    // Affiche le contenu du Set.

    let Fruits = new Set()

    Fruits.add("Pomme").add("Banane").add("Pomme")

    let refinedFruits = new Set(Fruits) // OUTPUT: Pomme Banane, there's no duplicate 

    console.log(refinedFruits)

    for(let consumer of refinedFruits) {
        alert(consumer)
    }


// WeakMap et WeakSet
// 10. WeakMap :

// Crée une instance de WeakMap.
// Ajoute des objets en tant que clés (par exemple, des objets utilisateurs).
// Associe à ces clés des métadonnées (par exemple, une date de dernière connexion).
// Montre comment accéder aux données avec une clé spécifique.

let weakmap10 = new WeakMap()

let obj = {}

weakmap10.set(obj, "COUCOU")

alert(weakmap10)
console.log(weakmap10)


// 11. WeakSet :

// Crée une instance de WeakSet.
// Ajoute des objets représentant des cartes d’identité.
// Supprime une de ces cartes (ou attends que l’objet soit inaccessible, simulant une suppression automatique).

// let weakset = new weakset()
















// PROMISES PRACTICES WITH SIMPLE EXERCICES TO UNDERSTAND MORE PROMISES :




// Exercice 1 : Calcul avec Promises
// Crée une fonction qui retourne une Promise. Cette Promise doit :

// Attendre 2 secondes.
// Résoudre avec la somme de deux nombres (par exemple, 5 + 7).
// Affiche le résultat avec .then().

function exercices1() {
    return new Promise((resolve, reject) => {
        console.log("Opération asychronous en cour du Calcul 5 + 7")
        setTimeout(() => {
            resolve(5 + 7)
        }, 2000)
    })
}

exercices1()
    .then((exercices1Message) => {
        console.log(exercices1Message)
    })

// Exercice 2 : Texte en majuscules
// Crée une fonction qui retourne une Promise.
// La Promise prend un texte (par exemple, "hello").
// Après 1 seconde, elle résout le texte transformé en majuscules (par exemple, "HELLO").
// Utilise .then() pour afficher le texte transformé.

function exercices2() {
    return new Promise((resolve, reject) => {
        console.log("Opération tranforme lettre en Majuscule 'HELLO' en cours")
        let exercices2Var = "hello"
        setTimeout(() => {
            resolve(exercices2Var.toUpperCase())
        }, 1000)
    })
}

exercices2()
    .then((exercices2Message) => {
        console.log(exercices2Message)
    })

// Exercice 3 : Compte à rebours
// Crée une fonction qui retourne une Promise.
// Simule un compte à rebours de 3 secondes :
// Après 1 seconde, affiche "3".
// Après 2 secondes, affiche "2".
// Après 3 secondes, affiche "1".
// À la fin, la Promise se résout avec le message "C'est parti !".
// Affiche le message final avec .then().

function exercices3() {
    return new Promise((resolve, reject) => {
        console.log("Opération 3, 2, 1 en cours")
        setTimeout(() => {
            console.log("3")
            setTimeout(() => {
                console.log("2")
                setTimeout(() => {
                    console.log("1")
                    resolve("C'est parti")
                }, 3000)
            }, 2000)
        }, 1000)
    })
}

exercices3()
    .then((exercices3Message) => {
        console.log(exercices3Message)
    })

// Exercice 4 : Vérification de l'âge
// Crée une fonction qui retourne une Promise.
// Cette Promise doit prendre un âge en entrée.
// Si l'âge est supérieur ou égal à 18, elle se résout avec le message "Vous êtes majeur".
// Sinon, elle rejette avec le message "Vous êtes mineur".
// Utilise .then() pour afficher le message si la Promise est résolue, et .catch() pour afficher le message si elle est rejetée.


function exerices4() {
    return new Promise((resolve, reject) => {
        let age = Number(21) 
        if (age => 18) {
            resolve("Vous êtes majeur")
        } else {
            reject("Vous êtes mineur")
        }
    })
}

exerices4()
    .then((message) => console.log(message))
    .catch((error) => console.log(error))

// Exercice 5 : Chainer des Promises
// Crée une fonction qui retourne une Promise.
// Cette fonction doit attendre 1 seconde avant de résoudre un nombre (par exemple, 10).
// Chaine trois .then() pour :
// Ajouter 5 au nombre.
// Multiplier le résultat par 2.
// Afficher le résultat final (par exemple, (10 + 5) × 2 = 30).

function exercices5() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve(10)
        }, 1000)
    })
}

exercices5()
    .then((exercices5Message) => {
        console.log(`Ajoute de 5 : ${exercices5Message} + 5`)
        return exercices5Message + 5
    })
    .then((exercices5Message) => {
        console.log(`Multiplication de 2 : ${exercices5Message} * 2`)
        return exercices5Message * 2
    })
    .then((exercices5Message) => {
        console.log(`Resulat final : ${exercices5Message}`)
    })

// Exercice Bonus : Charger une image (simulé)
// Crée une fonction qui retourne une Promise.
// La Promise simule le "chargement d'une image" après 2 secondes et se résout avec le message "Image chargée avec succès".
// Utilise .then() pour afficher le message.


function exericesBonus() {
    return new Promise((resolve, reject) => {
        console.log("Chargement d'une image")
        setTimeout(() => {
            resolve("Image Chargée avec succès")
        }, 2000)
    })
}

exericesBonus()
    .then((exericesBonusMessage) => {
        console.log(exericesBonusMessage)
    })










// Async/Await PRACTICES WITH SIMPLE EXERCICES TO UNDERSTAND MORE Async/Await :


    // Exercice 1 : Temps d'attente
    // Crée une fonction attendreTemps(ms) qui retourne une Promise.
    // La Promise doit se résoudre après ms millisecondes.
    // Crée une fonction async qui attend 2 secondes, puis affiche "2 secondes écoulées".

    function attendreTemps(ms) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve(`${ms} seconds écoulées`)
            }, ms)
        })
    }

    async function asyncAttendreTemps() {
        console.log("Début de l'operation")
        let resultat = await attendreTemps(2000)

        console.log(resultat)
        console.log("Fin de l'operation")
    }

    asyncAttendreTemps()

    // Exercice 2 : Texte en majuscules
    // Crée une fonction qui retourne une Promise pour transformer un texte en majuscules après 1 seconde.
    // Crée une fonction async pour appeler cette Promise avec await et afficher le texte transformé.

    function Exerices2Majuscules() {
        return new Promise((resolve, reject) => {
            let Exerices2MajusculesVar = "hello"
            setTimeout(() => {
                resolve(Exerices2MajusculesVar.toUpperCase())
            }, 1000)
        })
    }

    async function AsyncExerices2Majuscules() {

        let resultat = await Exerices2Majuscules()
        console.log(resultat)

    }

    AsyncExerices2Majuscules()

    // Exercice 3 : Addition asynchrone
    // Crée une fonction qui retourne une Promise pour ajouter deux nombres après 1,5 seconde.
    // Crée une fonction async pour utiliser cette Promise avec await et afficher la somme.

    function exercices3() {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve(5 + 10)
            }, 1500)
        })
    }

    async function exercices3Async() {
        console.log("Calcul de deux nombres en cours")
        let resultat = await exercices3()

        console.log(resultat)
        console.log("Terminé sont le calcul de deux nombres")

    }
    exercices3Async()

    // Exercice 4 : Compte à rebours
    // Crée une fonction qui retourne une Promise pour afficher un chiffre après une seconde.
    // Exemples : afficher 3 après 1 seconde, 2 après 2 secondes, et 1 après 3 secondes.
    // Utilise une fonction async pour appeler cette Promise trois fois avec await, et affiche "C'est parti !" à la fin.

    function reboursExercices4() {
        return new Promise((resolve, reject) => {
            setTimeout(() =>{
                console.log("3")
                setTimeout(() => {
                    console.log("2")
                    setTimeout(() => {
                        console.log("1")
                        resolve("c'est parti")
                    }, 3000)
                }, 2000)
            }, 1000)
        })
    }

    async function reboursExercices4Async() {
        console.log("Début du compte à rebours")
        let resultat = await reboursExercices4()

        console.log(resultat)
        console.log("Fin du compte à rebours")
    }

    reboursExercices4Async()

    // Exercice 5 : Simuler un chargement
    // Crée une fonction qui retourne une Promise pour simuler le chargement d'un fichier (par exemple "Chargement en cours...").
    // Après 2 secondes, résout avec le message "Chargement terminé".
    // Utilise await dans une fonction async pour afficher les messages au bon moment.

    function chargementExercices5() {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                console.log("Chargement en cours")
                setTimeout(() => {
                    resolve("Chargement terminée")
                }, 2000)
            }, 0)
        })
    }

    async function chargementExercices5Async() {

        let resultat = await chargementExercices5()

        console.log(resultat)
    }

    chargementExercices5Async()

    // Exercice 6 : Vérification de l'âge
    // Crée une fonction qui retourne une Promise pour vérifier si une personne est majeure ou mineure.
    // Si l'âge est supérieur ou égal à 18, résout avec "Vous êtes majeur".
    // Sinon, rejette avec "Vous êtes mineur".
    // Crée une fonction async pour appeler cette Promise et utiliser try/catch pour gérer les cas majeurs et mineurs.


    function ageExercices6() {
        return new Promise((resolve, reject) => {
            let age = Number(21)
            if (age >= 18) {
                resolve("Vous êtes majeurs")
            } else {
                reject("Vous êtes mineur")
            }
        })
    }

    async function ageExercices6Async() {

        

        try {

            let resultat = await ageExercices6()
            console.log(resultat)

        } catch (error) {

            console.log(error)

        }   

    }

    ageExercices6Async()

    // Exercice 7 : Enchaînement d'opérations
    // Crée une fonction qui retourne un nombre initial après 1 seconde (par exemple, 10).
    // Utilise await pour :
    // Ajouter 5 au nombre.
    // Multiplier le résultat par 2.
    // Afficher le résultat final.
    

    function EnchaînementExercices7() {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve(20)
            }, 1000)
        })
    }

    async function EnchaînementExercices7Async() {

        let resultat = await EnchaînementExercices7()

        console.log(`Ajoute 5 : ${resultat} + 5`)
        console.log(`Multiplier par 2 : ${resultat} * 2`)

        console.log(`Resultat Final : ${resultat}`)

    }

    EnchaînementExercices7Async()


