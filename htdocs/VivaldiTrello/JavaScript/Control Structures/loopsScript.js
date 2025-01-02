// Compter de 1 à 10 avec for :

// Utilise une boucle for pour afficher les nombres de 1 à 10.
// Étapes :
// La boucle commence à 1 et s'arrête lorsque la variable d'itération atteint 10.
// A chaque itération, affiche le nombre actuel dans la console ou sur la page.

for (let i = 1; i <= 10; i++) {
    document.write(i + "<br>")
}


// Compter à l'envers avec for :

// Utilise une boucle for pour afficher les nombres de 10 à 1.
// Étapes :
// La boucle commence à 10 et décrémente la variable d'itération à chaque tour.
// A chaque itération, affiche le nombre dans la console ou sur la page.

for (let i = 10; i >= 1; i-- ) {
    document.write(i + "<br>")
}


// Somme des nombres de 1 à N avec for :

// Demande à l'utilisateur un nombre N via un prompt.
// Utilise une boucle for pour calculer la somme de tous les entiers de 1 à N.
// Étapes :
// Initialiser une variable somme à 0.
// Utilise une boucle pour ajouter chaque nombre de 1 à N à somme.
// Affiche la somme finale.

let n = Math.floor(Math.random() * 100) + 1
let somme = 0
for (let i = 1; i <= n; i++) {
    somme += i
    document.write(somme + "<br>")
}


// Table de multiplication avec for :

// Demande à l'utilisateur un nombre X et affiche la table de multiplication de ce nombre (de 1 à 10).
// Étapes :
// Utilise une boucle for qui itère de 1 à 10.
// A chaque itération, affiche le résultat de la multiplication de X par l'index de la boucle.

let nombreX = Math.floor(Math.random() * 10) + 1

for (let i = 1; i <= 10; i ++) {
    document.write(nombreX + " x " + i + " = " + i * nombreX + "<br>")
}


// Facteurs de N avec for :

// Demande à l'utilisateur un nombre N.
// Utilise une boucle for pour afficher tous les facteurs de N (les nombres qui divisent N sans reste).
// Étapes :
// Initialiser une boucle qui va de 1 à N.
// A chaque itération, vérifie si N est divisible par le nombre courant (en utilisant le modulo %).
// Si c'est le cas, affiche ce nombre.

let nombreN = Math.floor(Math.random() * 100) + 1

for (let i = 1; i <= nombreN; i++) { 
    if (nombreN % i === 0) {
        document.write(i + "<br>")
    } 
}

// Exercices avec while :
// Compter jusqu'à N avec while :

// Demande à l'utilisateur un nombre N.
// Utilise une boucle while pour afficher les nombres de 1 à N.
// Étapes :
// Initialiser un compteur à 1.
// Tant que le compteur est inférieur ou égal à N, affiche le compteur et incrémente-le de 1.

let nombreN2 = Math.floor(Math.random() * 100) + 1

let i = 1
while (i <= nombreN2) {
    document.write(i + "<br>")
    i++
}

// Somme des nombres jusqu'à N avec while :

// Demande à l'utilisateur un nombre N.
// Utilise une boucle while pour calculer la somme des nombres de 1 à N.
// Étapes :
// Initialiser une variable somme à 0 et un compteur à 1.
// Tant que le compteur est inférieur ou égal à N, ajoute le compteur à somme et incrémente le compteur.
// Affiche la somme finale.

let nombreN3 = Math.floor(Math.random() * 100) + 1

let somme2 = 0
let j = 1
while (j <= nombreN3) {
    somme2 += j
    j++
    document.write(somme2 + "<br>")
}


// Table de multiplication avec while :

// Demande à l'utilisateur un nombre X et affiche la table de multiplication de ce nombre (de 1 à 10) avec une boucle while.
// Étapes :
// Initialiser un compteur à 1.
// Tant que le compteur est inférieur ou égal à 10, affiche X multiplié par le compteur.
// Incrémente le compteur à chaque itération.

let nombreX2 = Math.floor(Math.random() * 10) + 1

let k = 1
while (k <= 10) {
    document.write(nombreX2 + " x " + k + " = " + k * nombreX2 + "<br>")
    k++
}

// Trouver un nombre impair supérieur à N avec while :

// Demande un nombre N à l'utilisateur.
// Utilise une boucle while pour trouver et afficher le premier nombre impair supérieur à N.
// Étapes :
// Si N est pair, commence à N + 1, sinon commence à N + 2.
// Utilise une boucle while pour afficher ce nombre impair.

let nombreN4 = Math.floor(Math.random() * 100) + 1

let l = nombreN4 % 2 === 0 ? nombreN4 + 1 : nombreN4 + 2
while (l % 2 === 0) {
    l += 2
}


// Cercle de nombres avec while :

// Demande un nombre N.
// Utilise une boucle while pour afficher tous les multiples de N jusqu'à 100.
// Étapes :
// Initialiser un compteur à N.
// Tant que le compteur est inférieur ou égal à 100, affiche le compteur et incrémente-le de N.



// Exercices avec do...while :
// Demander un nombre valide avec do...while :

// Utilise une boucle do...while pour demander à l'utilisateur un nombre entre 1 et 10.
// La boucle continue jusqu'à ce que l'utilisateur entre un nombre valide.
// Étapes :
// Demander un nombre à l'utilisateur.
// Vérifie si ce nombre est valide (entre 1 et 10).
// Si ce n'est pas le cas, recommence.



// Somme jusqu'à N avec do...while :

// Demande à l'utilisateur un nombre N.
// Utilise une boucle do...while pour calculer la somme des nombres de 1 à N.
// Étapes :
// Initialiser une variable somme à 0 et un compteur à 1.
// Tant que le compteur est inférieur ou égal à N, ajoute le compteur à somme et incrémente le compteur.
// Affiche la somme finale.


// Table de multiplication avec do...while :

// Demande à l'utilisateur un nombre X et affiche la table de multiplication de ce nombre (de 1 à 10) avec une boucle do...while.
// Étapes :
// Initialiser un compteur à 1.
// Tant que le compteur est inférieur ou égal à 10, affiche X multiplié par le compteur.
// Incrémente le compteur à chaque itération.



// Vérifier la parité avec do...while :

// Demande à l'utilisateur un nombre et utilise une boucle do...while pour vérifier si le nombre est pair ou impair.
// La boucle continue jusqu'à ce que l'utilisateur entre un nombre valide.
// Étapes :
// Demander un nombre à l'utilisateur.
// Si le nombre est pair, affiche "Pair", sinon affiche "Impair".
// Si l'utilisateur entre une valeur non valide, recommence.


// Additionner les chiffres d'un nombre avec do...while :

// Demande un nombre à l'utilisateur.
// Utilise une boucle do...while pour additionner tous les chiffres du nombre et afficher le résultat.
// Étapes :
// Initialiser une variable somme à 0.
// Tant que le nombre est supérieur à 0, extraire le dernier chiffre en utilisant le modulo % et l'ajouter à somme.
// Supprimer le dernier chiffre du nombre en le divisant par 10.


// Exercices avancés avec break et continue :
// Casser la boucle dès que la somme dépasse 50 avec break :

// Utilise une boucle for pour ajouter des nombres de 1 à N (demander à l'utilisateur N).
// Si la somme dépasse 50, arrête la boucle avec break.
// Étapes :
// Initialiser une variable somme à 0 et une boucle for qui va de 1 à N.
// A chaque itération, ajouter le nombre à somme.
// Si la somme dépasse 50, utiliser break pour arrêter la boucle.
// Trouver les nombres pairs jusqu'à N avec continue :

// Demande un nombre N à l'utilisateur.
// Utilise une boucle for et continue pour afficher tous les nombres pairs jusqu'à N (en sautant les impairs).
// Étapes :
// Utiliser une boucle for pour parcourir de 1 à N.
// Si le nombre est impair, utiliser continue pour sauter l'itération.
// Afficher les nombres pairs.
// Afficher un message à chaque 5e itération avec break et continue :

// Utilise une boucle for pour afficher les nombres de 1 à 100.
// A chaque fois que le nombre est divisible par 5, affiche "C'est un multiple de 5".
// Si le nombre atteint 50, arrête la boucle avec break.
// Étapes :
// Utiliser une boucle for de 1 à 100.
// A chaque itération, vérifie si le nombre est un multiple de 5 et affiche un message.
// Si le nombre atteint 50, arrête la boucle avec break.
// Sauter certains nombres avec continue dans une boucle :

// Demande un nombre N à l'utilisateur.
// Utilise une boucle for pour afficher tous les nombres de 1 à N, mais saute les multiples de 3 avec continue.
// Étapes :
// Utiliser une boucle for de 1 à N.
// Si le nombre est un multiple de 3, utiliser continue pour passer à l'itération suivante.
// Afficher les autres nombres.
// Trouvez le premier nombre premier inférieur à N avec break :

// Demande un nombre N à l'utilisateur.
// Utilise une boucle pour trouver le premier nombre premier inférieur à N. Arrête la boucle dès qu'un nombre premier est trouvé avec break.
// Étapes :
// Utiliser une boucle for pour parcourir les nombres de N-1 à 1.
// Pour chaque nombre, vérifier s'il est premier (en testant s'il n'a pas de diviseur autre que 1 et lui-même).
// Dès qu'un nombre premier est trouvé, utiliser break pour arrêter la boucle et l'afficher.