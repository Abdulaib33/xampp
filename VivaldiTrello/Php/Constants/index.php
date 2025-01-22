<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>

    <?php 
    
    ?>
    <!-- Exercice 1 : Définir une constante pour une clé API
    Définis une constante nommée API_KEY et assigne-lui une valeur aléatoire, comme une clé API factice (par exemple, abc123xyz). Ensuite, affiche cette constante à l'écran.

    Objectif : Pratiquer la définition d'une constante avec define() ou const et afficher sa valeur. -->

    <?php 
        define("API_KEY", "abc123xyz");
        echo API_KEY;
        echo "<br>"
    ?>

    <!-- Exercice 2 : Calcul avec une constante pour la valeur de Pi
    Crée une constante appelée PI avec la valeur de Pi (3.14159). Utilise cette constante pour calculer l'aire d'un cercle dont le rayon est 5. Affiche le résultat du calcul.

    Objectif : Utiliser une constante dans un calcul pour observer son comportement dans une expression. -->

    <?php 

        const PI = 3.14159;
        echo PI; // 3.14159
        echo "<br>";
        $rayon = 5;
        
        $aire = PI * $rayon * $rayon;

        echo "L'aire du triangle " . $rayon . " est : " . $aire;
        echo "<br>"

    ?>

    <!-- Exercice 3 : Utiliser une constante dans une fonction
    Définis une constante appelée MAX_LOGIN_ATTEMPTS avec une valeur de 3. Crée une fonction checkLoginAttempts($attempts) qui prend un paramètre $attempts et compare ce nombre avec la constante MAX_LOGIN_ATTEMPTS. Si $attempts est supérieur à cette constante, affiche "Nombre d'essais dépassé". Sinon, affiche "Essai accepté".

    Objectif : Pratiquer l'utilisation des constantes dans des conditions logiques et dans des fonctions. -->

    <?php 

        const MAX_LOGIN_ATTEMPS = 3;  
        $attempts = 4;

        if (MAX_LOGIN_ATTEMPS > $attempts) {
            echo "Nombre d'essais dépassé";
            echo "<br>";
        } else {
            echo "Essaie accepté, mais si tu foire cette fois c'est mort";
            echo "<br>";
        }

    ?>

    <!-- Exercice 4 : Créer une constante pour une URL de base
    Définis une constante BASE_URL qui contient l'URL d'une API, par exemple, https://api.example.com/. Crée une fonction getApiUrl($endpoint) qui prend un paramètre $endpoint et renvoie l'URL complète de l'API en concaténant BASE_URL avec l'$endpoint fourni. Affiche le résultat pour l'endpoint /users.

    Objectif : Apprendre à utiliser des constantes pour gérer des valeurs globales comme des URLs. -->

    <?php 

        const BASE_URL = "https://api.example.com/";

        function getApiUrl($endpoint) {

            return BASE_URL . $endpoint;
        }

        echo getApiUrl("/user");
        echo "<br>"
    ?>

    <!-- Exercice 5 : Utilisation d'une constante dans une classe
    Définis une constante COMPANY_NAME dans une classe Company. Crée une méthode getCompanyName() qui retourne le nom de l'entreprise en utilisant cette constante. Instancie la classe et appelle la méthode pour afficher le nom de l'entreprise.

    Objectif : Voir comment définir et utiliser des constantes dans une classe. -->

    <?php 

        class Company {

            const COMPANY_NAME = "Abdulaib33.co LTD";

            public function getCompanyName() {

                return self::COMPANY_NAME;

            }

        }

        // echo new Company()->getCompanyName(); this is incorrect we need to store the calss Company with the prefix new behind in a varaible

        $société = new Company();

        echo $société->getCompanyName();
        echo "<br>"
    ?>
    

</body>
</html>