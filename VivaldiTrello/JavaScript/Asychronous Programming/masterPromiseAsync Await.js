// Niveau 1 : Simple
// 1. Compter jusqu'à 3 avec une pause entre chaque chiffre

// Crée une fonction compter(ms) qui affiche un chiffre toutes les ms millisecondes, de 1 à 3.
// Affiche "C'est fini !" à la fin.


function compter1_3(ms) {
    return new Promise((resolve, reject) => {
        let count = 0

       const interval = setInterval(() => {
            console.log(count)
            count++
            if (count > 3) {
                clearInterval(interval)
                resolve("C'est fini")
            }
        }, ms)
    })
}

async function compter1_3async() {

    let result = await compter1_3(1000)
    console.log(result)
} 

compter1_3async()


// 2. Attendre un message aléatoire
// Crée une fonction qui retourne une Promise résolue après un temps aléatoire (entre 1 et 3 secondes).
// La Promise doit résoudre avec un message : "Message reçu après X secondes".
// Utilise await pour afficher le message.

function messageAleatoire2() {
    return new Promise((resolve, reject) => {
        let random = Math.floor(Math.random() * 3) + 1
        let ms = random * 1000
        setTimeout(() => {
            resolve(`Message reçu après ${random} secondes`)
            console.log(ms)
        }, random)
    })
}

async function messageAleatoire2async() {
    let result = await messageAleatoire2()
    console.log(result)
}

messageAleatoire2async()

// Niveau 2 : Gestion d'erreurs
// 3. Vérification avec timeout

// Crée une fonction verifierAvecTimeout(ms) qui simule une tâche asynchrone (résolue en 2 secondes).
// Si le temps dépasse le délai spécifié dans ms, rejette la promesse avec "Timeout dépassé".
// Utilise try/catch pour gérer les erreurs.

function verifierAvecTimeout(ms) {
    return new Promise((resolve, reject) => {
        let tache = new Promise(() => {
            setTimeout(() => {
                resolve(`résolue en 2 secondes`)
                console.log("résolue en 2 secondes")
            }, 2000)
        })
        

        let timeout = new Promise(() => {
            setTimeout(() => {
                reject("Timeout dépassé")
            }, ms)
        })
        

        Promise.race([tache, timeout])

    })
}

async function verifierAvecTimeoutasynch() {

    try {
        let result = await verifierAvecTimeout(1000)
        console.log(result)
    } catch (error) {   
        console.log(error)
    } finally {
        console.log("ton 3ème fonctioonne bien ")
    }

}

verifierAvecTimeoutasynch()

const start = new Date().getTime();
const start1 = new Date()
document.write(start + "<br>") 
document.write(start1)

// 4. Validateur d'email

// Crée une fonction asynchrone qui vérifie si un email contient un "@" et un ".".
// Si l'email est invalide, rejette avec un message d'erreur.
// Gère les cas valides et invalides avec try/catch.

// Méthode suggérée : Promise.reject() (ou simplement throw dans une fonction async)
// Si l'email est invalide, on peut rejeter une promesse ou lever une erreur avec throw.
// Gère les cas avec try/catch.

function valideEmail4(email) {
    // let email = "Abdulaibayo08@gmail.com"
    return new Promise((resolve, reject) => {

        if (email.includes("@") && email.includes(".")) {
            resolve("Email valide")
        } else {
            reject(Promise.reject("Email invalide"))
        }
    })
}


async function valideEmail4async() {
    
    try {
        let result = await valideEmail4("Abdulaibayo08@gmail.com")
        console.log(result)
    } catch (error) {
        console.log(error)
    }

}

valideEmail4async()

// Niveau 3 : Promises avancées
// 5. Téléchargements multiples

// Simule 3 téléchargements (avec des délais différents en millisecondes : 1000ms, 2000ms, 3000ms).
// Affiche "Téléchargement terminé" pour chaque fichier dès qu'il est téléchargé.
// Utilise Promise.all() pour afficher "Tous les téléchargements terminés" une fois tous les fichiers prêts.

// Méthode suggérée : Promise.all()
// Permet d'exécuter les trois téléchargements en parallèle et d'attendre qu'ils soient tous terminés.
// Affiche un message pour chaque fichier dès qu'il est terminé.

function telechargement5() {
    

        let first = new Promise((resolve) => {
            setTimeout(() => {
                resolve("Téléchargement ternimé 1")
            }, 1000)
        }) 
           

        let second = new Promise((resolve) => {
            setTimeout(() => {  
                resolve("Téléchargement terminé 2")
            }, 2000)
        })

        let third = new Promise((resolve) => {
            setTimeout(() => {
                resolve("Téléchargement terminé 3")
            }, 3000)
        })

        return Promise.all(([first, second, third]))

}

async function telechargement5async() {
    
    try {
        let result = await telechargement5()
        console.log(result)
        console.log("Tout les téléchargment sont terminée")

        resultloop = result.length

        // for (let i = 0; i < resultloop; i++ ) {
        //     console.log(i + resultloop[i])
        // }
    } catch (error) {
        console.log(error)
    }

}

telechargement5async()

// 6. La course des promesses

// Simule trois tâches asynchrones avec des délais différents.
// Utilise Promise.race() pour afficher celle qui termine en premier.

// Méthode suggérée : Promise.race()
// Affiche la promesse qui se résout ou rejette en premier.

function course6() {
    
    let first6 = new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("premier tache terminées")
        }, 2000)    
    })
    let second6 = new Promise((resolve, reject) => {
        setTimeout(() => {
            reject("deuxième tache à échouée")
        }, 1000)
    })
    let third6 = new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("troisième tache terminées")
        }, 1500)
    })

    return Promise.race([first6, second6, third6])

}

async function course6async() {

    try {
        let result = await course6()
        console.log(`${result} à été le plus rapide avant tout les autres HAHAHAHHAHAHAHAAHAHAHAAHHHAHA`)
    } catch (error) {
        console.log(`ERROR: ${error}`)
    }
}

course6async()

// Niveau 4 : Scénarios réels
// 7. Recherche d'utilisateur

// Simule une recherche d'utilisateur avec une fonction rechercheUtilisateur(id).
// Si l'ID est pair, résout avec "Utilisateur trouvé : ID {id}".
// Sinon, rejette avec "Utilisateur introuvable".
// Gère les deux cas avec async/await et try/catch.

// Méthode suggérée : Promise.resolve() et Promise.reject()
// Promise.resolve() pour un ID pair, et Promise.reject() pour un ID impair.
// Gère les résultats avec async/await et try/catch.

function Recherche7(id) {

    return new Promise((resolve, reject) => {
        if(id % 2 === 0) {
            resolve("Utilisateur trouvé")
        } else {
            reject("utilisateur Introuvable")
        }
    })
}

async function Recherche7async() {

    try {
        let result = await Recherche7(7)

        console.log(result)

    } catch (error) {
        console.log(`ERROR : ${error}`)
    }

}

Recherche7async()

// 8. Vérification et action

// Crée une fonction asynchrone pour vérifier si une commande peut être livrée.
// Si la commande est livrable, affiche "Commande livrée".
// Sinon, rejette avec "Commande non livrable".
// Affiche toujours "Merci pour votre commande" avec finally.

// Méthode suggérée : finally
// Utilise resolve ou reject pour livrable ou non livrable, et affiche un message final avec finally.

function Verification8() {
    let pizzaPret = true // ou false
    return new Promise((resolve, reject) => {

        if (pizzaPret) {
            resolve("Commande livrée")
        } else {
            reject("Commande non livrable")
        }

    })

}

async function Verification8asynch() {
    try {
        let result = await Verification8()
        console.log(result)
    } catch (error) {
        console.log(error)
    } finally {
        console.log("Merci pour votre commandes")
    }
}

Verification8asynch()

// Niveau 5 : Combinaisons et défis
// 9. Pipeline d'opérations

// Crée une fonction qui :
// Prend un nombre initial (ex. : 5).
// Ajoute 5 après 1 seconde.
// Multiplie par 2 après 2 secondes.
// Divise par 3 après 3 secondes.
// Affiche le résultat final.

// Méthode suggérée : Chaînage de then() ou async/await
// Chaque opération (addition, multiplication, division) peut être exécutée en série avec un délai entre elles.

function pipeline9() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve(5)
        }, 1000)
    })
}

// async function pipeline9asynch() {    ça ne respect pas le temps ducoup on skip cette façon de faire
//     try {
//         let result = await pipeline9()
//         console.log(`ton nombres est : ${result}`)
//         console.log(`ajoute de 5 + 5 : ${result + 5}`)
//         console.log(`Multiplie par 2 * 10: ${result * 2}`)
//         console.log(`Divisé par 3 / 20 : ${result / 3}`)
//         console.log(result)
//     } catch (error) {
//         console.log(error)
//     } finally {
//         console.log("ton async fonctione bien 9")
//     }
// }

async function pipeline9asynch() { // CELUI-CI NE RESPECTE TOUJOURS PAS LE DELAI MEME SI CA DONNE L'IMPRESSION
    try { 
        let result = await pipeline9()
        console.log(`ton nombres est : ${result}`)

        result += 5
        console.log(`Ajoute de 5 : ${result}`);
        
        result *= 2
        console.log(`Multiplie par 2 : ${result}`);

        result /= 3
        console.log(`Divisé par 3 : ${result}`);

    } catch (error) {
        console.log(error)
    } finally {
        console.log("ton pipeline fonctione bien 9")
    }
}

pipeline9asynch()

// 10. Simulateur de jeu avec plusieurs étapes

// Simule un jeu avec plusieurs étapes :
// Étape 1 : "Préparation" (2 secondes).
// Étape 2 : "Chargement des ressources" (3 secondes).
// Étape 3 : "Début du jeu".
// Affiche un message à chaque étape avec await.

// Méthode suggérée : async/await avec setTimeout
// Chaque étape est une promesse qui se résout après un délai.
// Utilise await pour garantir un affichage séquentiel.

function simulateur10(message, delay) {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log(message)
            resolve()
        }, delay)
    })

}

async function simulateur10async() {
    
    try {
        await simulateur10("Préparation", 2000)
        await simulateur10("Chargement des ressources", 3000)
        console.log("Début du jeu")
    } catch (error) {
        console.log(error)
    }

}

simulateur10async()

// 11. Analyse de données en parallèle

// Simule une analyse de données avec 3 fichiers.
// Chaque fichier prend un temps différent pour être analysé (1 seconde, 2 secondes, 3 secondes).
// Utilise Promise.allSettled() pour afficher le statut de chaque fichier (réussi ou échoué).

// Méthode suggérée : Promise.allSettled()
// Affiche le statut de chaque fichier (résolu ou rejeté) sans rejeter la promesse globale.

function Analyse11() {

    let fichier1 = new Promise((resolve) =>{
        setTimeout(() => {
            resolve("Analyse du premier fichier reussie")
        }, 1000)
    })
    let fichier2 = new Promise((_, reject) =>{
        setTimeout(() => {
            reject("Analyse du deuxième fichier échouée")
        }, 2000)
    })
    let fichier3 = new Promise((resolve) =>{
        setTimeout(() => {
            resolve("Analyse du troisième fichier reussie")
        }, 3000)
    })

    return Promise.allSettled([fichier1, fichier2, fichier3])

}

async function Analyse11async() {

    try {
        let result = await Analyse11()
        console.log(result)
        result.forEach((file, index) => {
            if(file.status === "fulfilled") {
                console.log(`fichier ${index + 1} : ${file.value}`)
            } else {
                console.log(`fichier ${index + 1} : ${file.reason}`)
            }
        })

    } catch (error) {
        console.log("Erreur inattendue :", error);
    }   

}

Analyse11async()

// Niveau 6 : Exercices complexes
// 12. Défi d'API fictive

// Simule un appel API avec une fonction appelAPI(endpoint) qui prend un point de terminaison (endpoint).
// Si l'endpoint est "utilisateurs", retourne une liste d'utilisateurs après 2 secondes.
// Si l'endpoint est "commandes", retourne une liste de commandes après 3 secondes.
// Si l'endpoint est inconnu, rejette avec "Erreur : endpoint inconnu".
// Gère les deux cas avec async/await.

// Méthode suggérée : async/await avec Promise.resolve() et Promise.reject()
// Retourne les données appropriées pour les endpoints valides avec Promise.resolve.
// Rejette avec Promise.reject() si l'endpoint est inconnu.



// 13. Promesse qui s'auto-annule

// Crée une promesse qui doit se résoudre avec "Opération réussie" après 5 secondes.
// Si elle met plus de 3 secondes, elle doit s'annuler avec "Timeout dépassé" grâce à Promise.race().

// Méthode suggérée : Promise.race()
// Une promesse qui résout après 5 secondes entre en "course" contre une promesse de timeout de 3 secondes.



// Niveau 7 : Défis libres
// 14. Créer une animation avec délai

// Simule une animation d'affichage ligne par ligne avec une fonction afficherTexte() qui utilise await.
// Exemple :
// Copy code
// Lancement...
// En cours...
// Terminé !

// Méthode suggérée : async/await avec setTimeout
// Chaque ligne est affichée après un délai avec await pour un affichage séquentiel.



// 15. Système de notifications

// Crée une fonction asynchrone qui affiche des notifications dans l'ordre avec des pauses entre elles (exemple : toutes les 2 secondes).
// Notifications :
// "Nouvelle notification reçue !"
// "Message non lu disponible."
// "Mise à jour terminée."

// Méthode suggérée : async/await avec setTimeout
// Affiche les notifications une par une avec un délai entre chaque.


