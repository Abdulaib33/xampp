<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="container">

<style>
        body {
        background-color: darkslategray;
        color: wheat;
        
    }

    * {
        text-decoration: none;
        color: wheat;
    }

    
</style>
    

<!-- 1. Gestion des catégories de produits
Objectif : Apprendre à créer une route dynamique pour afficher les produits d'une catégorie spécifique.
Détails :
Crée une page qui permet d'afficher une liste de produits en fonction de la catégorie demandée.
Utilise une URL comme ?category=electronics où electronics est la catégorie des produits. Si l'utilisateur accède à une catégorie non existante, affiche un message d'erreur comme "Aucune catégorie trouvée".
Cette route doit être flexible pour d'autres catégories (par exemple, ?category=clothing).
Essaie de simuler une base de données ou utilise un tableau statique pour les produits afin de filtrer ceux qui appartiennent à une catégorie spécifique. -->

<?php 

if (isset($_GET['category']) && $_GET['category'] === "electronics") {

    $content = "

    <ul>
    <li><a href='electronics.php?laptop=1'>LAPTOP 1</a></li>
    <li><a href='electronics.php?laptop=2'>LAPTOP 2</a></li>
    </ul>
    
    ";

} elseif(isset($_GET['category']) && $_GET['category'] === "clothing") {

    $content = "
    <ul>
    <li><a href=''>Chemise</a></li>
    <li><a href=''>Pantalon long</a></li>
    </ul>
    ";

} else {

    $content = "";

}


?>



<nav class="container">
    <ul>
        <li><a href="?category=electronics">Electronics</a></li>
        <li><a href="?category=clothing">Clothing</a></li>
    </ul>
</nav>

<section>
    <div>
        <?php echo $content?>
    </div>
</section>



<!-- !avestion des utilisateurs (connexion/déconnexion)
Objectif : Créer des routes permettant la gestion de la connexion et de la déconnexion des utilisateurs.
Détails :
Crée une page de connexion accessible via ?login. Cette page doit contenir un formulaire où l'utilisateur peut entrer son nom d'utilisateur et mot de passe.
Ajoute une fonctionnalité pour afficher un message de connexion réussie ou échouée en fonction des informations saisies.
Ajoute une route de déconnexion ?logout, qui doit simuler la déconnexion de l'utilisateur et afficher un message de confirmation comme "Déconnexion réussie".
À chaque fois que l'utilisateur se connecte ou se déconnecte, assure-toi de manipuler une variable de session pour suivre l'état de connexion.  -->





<!-- 3. Affichage des utilisateurs avec un ID unique
Objectif : Créer une route pour afficher les informations d'un utilisateur spécifique.
Détails :
Crée une route ?userID=x où x représente l'ID de l'utilisateur. En fonction de cet ID, affiche les détails d'un utilisateur spécifique.
Assure-toi que si l'ID n'existe pas (par exemple, ?userID=999 pour un utilisateur qui n'existe pas), une erreur "Utilisateur non trouvé" soit affichée.
Tu peux simuler les utilisateurs avec un tableau statique, où chaque utilisateur a un ID, un nom, un email, etc. -->



<!-- 4. Redirections basiques
Objectif : Apprendre à utiliser les redirections en fonction de l'URL demandée.
Détails :
Crée une page avec une route qui vérifie un certain paramètre dans l'URL, comme ?invalid=true.
Si ce paramètre est présent, redirige l'utilisateur vers la page d'accueil (par exemple, ?).
Utilise la fonction header('Location: ...') pour effectuer la redirection et ajoute un exit pour arrêter l'exécution du script après la redirection. -->



<!-- 5. Gestion d'une page d'erreur 404
Objectif : Apprendre à gérer les erreurs de page non trouvée avec une page 404.
Détails :
Crée une page d'erreur personnalisée qui est affichée si l'URL ne correspond à aucune route définie.
Utilise une structure de type if/else pour vérifier les routes possibles et, si aucune correspondance n'est trouvée, affiche une page d'erreur 404 avec un message comme "Page non trouvée".
Essaie de donner un look un peu plus professionnel à ta page d'erreur 404 en incluant des informations comme "Nous ne trouvons pas la page que vous recherchez", avec éventuellement un lien de retour à la page d'accueil. -->



<!-- 6. Passer des paramètres supplémentaires dans l'URL
Objectif : Apprendre à gérer plusieurs paramètres dans l'URL pour afficher des informations dynamiques.
Détails :
Crée une route comme ?productID=1&quantity=5. Cette route doit afficher le détail du produit en question ainsi que la quantité demandée.
Gère le cas où les paramètres sont manquants ou incorrects. Par exemple, si l'un des paramètres est absent, tu pourrais afficher un message indiquant qu'une information est manquante.
Essaie d'ajouter de la logique pour manipuler plusieurs paramètres et personnaliser l'affichage en fonction de ceux-ci (par exemple, ajuster le prix du produit en fonction de la quantité demandée). -->



<!-- 7. Gestion de la pagination
Objectif : Apprendre à implémenter une pagination pour les listes de produits ou d'articles.
Détails :
Crée une page avec une liste de produits ou d'articles paginée. Chaque page affiche un nombre limité d'éléments (par exemple, 5 produits par page).
Ajoute des liens de navigation pour permettre à l'utilisateur de passer d'une page à l'autre (par exemple, "Page 1", "Page 2", "Page 3").
Assure-toi que l'URL de chaque page soit dynamique, comme ?page=2, et que l'affichage des produits change en fonction du numéro de page passé dans l'URL.
Vérifie que les liens sont correctement construits pour aller à la page suivante ou précédente. -->


</body>
</html>