// 1. Création d'une Promise (avec then, catch, et finally)
    // Crée une fonction delayedMessage qui retourne une Promise. Cette Promise doit simuler une opération asynchrone (utilise setTimeout() pour attendre 2 secondes).
    // Résout la Promise avec un message "Opération réussie!" ou rejette avec un message "Erreur survenue" en fonction de l'aléatoire (Math.random()).
    // Utilise then pour afficher le message de réussite, catch pour afficher une erreur, et finally pour afficher un message d'achèvement de l'opération.


    function delayedMessage() {
        return new Promise ((resolve, reject) => {
            setTimeout(() => {
                const success = Math.random() > 0.5
                if (success) {
                    resolve("Opération réussie!")
                } else {
                    reject("Erreur survenu")
                }
            }, 2000)
        })
    }

    delayedMessage()
        .then(result => console.log(result))
        .catch(error => console.log(error))
        .finally(() => console.log("Opération terminée"))

    


    // function delayedMessage() {
    //     return new Promise((resolve, reject) => {
    //         setTimeout(() => {
    //             const success = Math.random() > 0.5;
    //             if (success) {
    //                 resolve("Opération réussie!");
    //             } else {
    //                 reject("Erreur survenue");
    //             }
    //         }, 2000);
    //     });
    // }
    
    // delayedMessage()
    //     .then(result => console.log(result))
    //     .catch(error => console.log(error))
    //     .finally(() => console.log("Opération terminée"));
    


// 2. Utilisation d'async et await pour simplifier les Promises
    // Crée une fonction getData qui retourne une Promise avec un délai de 3 secondes avant de renvoyer une chaîne "Données récupérées".
    // Utilise async/await pour attendre le résultat de cette Promise dans une fonction fetchData, puis affiche le résultat dans la console.

// 3. Chainer plusieurs Promises avec then
    // Crée une fonction task qui simule une tâche asynchrone en retournant une Promise après 2 secondes.
    // Enchaîne trois appels à task avec des messages différents à chaque étape (par exemple "Tâche 1 terminée", "Tâche 2 terminée", "Tâche 3 terminée").

// 4. Enchaîner des Promises avec async/await
    // Crée une fonction task qui simule une tâche asynchrone en retournant une Promise.
    // Utilise async/await pour enchaîner trois tâches en attendant que chaque Promise soit résolue avant de passer à la suivante.

// 5. Faire une requête HTTP avec fetch
    // Utilise la Fetch API pour effectuer une requête HTTP GET vers une URL publique (par exemple, https://jsonplaceholder.typicode.com/posts).
    // Affiche les données récupérées dans la console.

// 6. Gérer les erreurs avec catch dans fetch
    // Utilise la Fetch API pour récupérer des données d'une URL. Ajoute une gestion d'erreurs avec catch pour capturer et afficher les erreurs en cas de problème (par exemple, une URL incorrecte).

// 7. Utilisation de Promise.all pour exécuter plusieurs Promises en parallèle
    // Crée plusieurs Promises qui retournent des résultats différents après des délais différents (par exemple, une tâche 1 de 2 secondes, une tâche 2 de 3 secondes).
    // Utilise Promise.all pour attendre que toutes les Promises soient résolues avant d'afficher les résultats.