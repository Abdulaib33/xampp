// 💻 Exercices pratiques pour maîtriser le DOM :

// 🔧 Niveau 1 : Manipulation de base du DOM
// 1️⃣ Changer le texte d'un élément :

// Crée une page HTML avec un <h1> qui affiche "Bonjour !".
// Ajoute un bouton qui, lorsqu'on clique dessus, change le texte en "Bonsoir !".

let changerElement = document.querySelector("h1")
let changerElementBtn = document.querySelector("#changeTextBtn")

// changerElementBtn.addEventListener("click", () => {
//     changerElement.textContent = "Bonsoir"
// })
// changerElementBtn.addEventListener("click", function() {
//     changerElement.textContent = "Bonsoir"
// })

function changerLeBonjour() {
    changerElement.textContent = "Bonsoir"
}

changerElementBtn.addEventListener("click", changerLeBonjour)



// 2️⃣ Changer la couleur d'un élément :

// Crée une boîte <div> avec une couleur de fond initiale.
// Ajoute un bouton qui, au clic, change la couleur de cette boîte en rouge.
let divColor = document.querySelector("div")
let changerElementBtn2 = document.querySelector("#button2")

function changerDivColor() {
    divColor.style.backgroundColor = "Red"
}

changerElementBtn2.addEventListener("click", changerDivColor)

// ⚙️ Niveau 2 : Interactions avec l'utilisateur
// 3️⃣ Affiche le nom de l'utilisateur :

// Crée une page avec un champ de texte et un bouton "Valider".
// Quand l'utilisateur saisit son nom et clique sur le bouton, affiche un message "Bienvenue, [Nom]" sous le bouton.

let input3 = document.querySelector("#input3")
let changerElementBtn3 = document.querySelector("#button3")
let div3 = document.querySelector("#div3")
function changerNomUser() {
    // let div3 = document.createElement("div").appendChild(input3)

    if(input3.value.trim() !== "") {
        div3.textContent = "Bienvenue :" + input3.value
        input3.value = ""
        input3.focus() 
    } else {
        div3.textContent = "Veuillez entrer votre nom !"
    }
}

changerElementBtn3.addEventListener("click", changerNomUser)

// 4️⃣ Compteur de clics :

// Ajoute un bouton qui affiche le nombre de fois qu'il a été cliqué.
// Par exemple, "Vous avez cliqué 5 fois".

let div4 = document.querySelector("#div4")
let changerElementBtn4 = document.querySelector("#button4")
let compteur4 = 0

function compteurClick() {
    
    compteur4 += 1
    // compteur4++  WORKS ALSO
    div4.textContent = "Vous avez cliqué " + compteur4 + " fois !"
    
}

changerElementBtn4.addEventListener("click", compteurClick)

// Version améliorée avec this et une approche plus dynamique :
// changerElementBtn4.addEventListener("click", function () {
//     let compteur = parseInt(this.getAttribute("data-count")) || 0;
//     compteur++;
//     this.setAttribute("data-count", compteur);
//     document.querySelector("#div4").textContent = "Vous avez cliqué " + compteur + " fois !";
// });



// 🏗️ Niveau 3 : Création et suppression d'éléments
// 5️⃣ Ajouter une tâche à une todolist :

// Crée une page avec un champ de texte et un bouton "Ajouter".
// Quand on clique sur "Ajouter", la tâche est affichée sous forme de liste.
// Ajoute un bouton "Supprimer" à chaque tâche pour la retirer de la liste.

let input5 = document.querySelector("#input5")
let changerElementBtn5 = document.querySelector("#button5")
let list5ul = document.querySelector("#list5")

function todolist5() {
    // li
    // taskText est l'input
    let li = document.createElement("li")  
    let taskText = input5.value.trim()

    if (taskText !== "") {

        li.textContent = taskText

        let deleteBtn = document.createElement("button")
        deleteBtn.textContent = "Supprimer"

        list5ul.appendChild(li)
        li.appendChild(deleteBtn)

        deleteBtn.addEventListener("click", () => {
            list5ul.removeChild(li)
        })

    } else {
        alert("Entrer Une Tache")
    }


}

changerElementBtn5.addEventListener("click", todolist5)

// 6️⃣ Galerie d'images :

// Crée une galerie avec trois images.
// Ajoute un bouton qui change l'image affichée quand on clique dessus.

let img6 = document.querySelector("#img6")
let button6 = document.querySelector("#button6")

let images = [
    "https://picsum.photos/300/200?random=2",
    "https://picsum.photos/300/200?random=3",
    "https://picsum.photos/300/200?random=4"
]

let index = 0

function changerImage() {
    index++
    if (index >= images.length) {
        index = 0
    }

    img6.src = images[index]

}
setInterval(changerImage, 3000)
button6.addEventListener("click", changerImage)

// 🌐 Niveau 4 : Événements et styles dynamiques
// 7️⃣ Changer le thème de la page :

// Crée un bouton "Mode sombre" qui change le style de la page (fond noir, texte blanc).
// Si le thème est sombre, le bouton doit devenir "Mode clair".

    let button7 = document.querySelector("#button7")
    let body = document.body

    function changerButtonDark() {
        if (body.classList.contains("dark-mode")) {

            body.classList.remove("dark-mode")
            button7.textContent = "Dark mode"
            button7.style.backgroundColor = "indigo"
            button7.style.color = "white"

        } else {
            body.classList.add("dark-mode")
            button7.textContent = "Mode claire"
            button7.style.backgroundColor = "white"
            button7.style.color = "black"
        }
    }

    // Initialisation du bouton (par exemple, en mode clair)
    button7.textContent = "Mode sombre";
    button7.style.backgroundColor = "indigo";
    button7.style.color = "white";

    button7.addEventListener("click", changerButtonDark)

// 8️⃣ Affichage d'une notification :

// Crée un bouton qui affiche une boîte de notification en haut de la page avec un message.
// La notification doit disparaître après 3 secondes.


// 🎯 Niveau 5 : Projet final - Jeu simple
// 9️⃣ Jeu de devinette :

// Crée une page où l'utilisateur doit deviner un nombre aléatoire entre 1 et 10.
// S'il trouve le bon numéro, affiche un message "Bravo !".
// Sinon, affiche "Réessaye !".

let input9 = document.querySelector("#input9")
let button9 = document.querySelector("#button9")
let div9 = document.querySelector("#div9")
let nombre9 = 0

function devineNombre() {
    let input = input9.value
    
    if (input > nombre9) {
        div9.textContent = "Réessaye"
    } else if (nombre9 < 0) {
        div9.textContent = "Réessaye"
    } else {
        div9.textContent = "Bravo le nombre était " + input
    }
}

button9.addEventListener("click", devineNombre)