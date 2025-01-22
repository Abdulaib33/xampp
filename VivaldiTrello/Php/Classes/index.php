<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

<style>
    body {
        background-color: darkslategray;
        color: wheat;
    }
</style>
<!-- 
1️⃣ Exercice : Créer et utiliser une classe simple
Objectif : Apprendre à déclarer une classe, créer des propriétés et méthodes, et instancier un objet.
Instruction :

Crée une classe Car avec les propriétés brand, model, et year.
Ajoute une méthode displayDetails() qui affiche les détails de la voiture.
Instancie un objet de la classe et appelle la méthode pour afficher les informations. -->

<?php 

class Car {

    // Propriété
    public $brand;
    public $model;
    public $year;

    // Methodes
    function setDetails($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }   

    function displayDetails() {
        return "Brand : $this->brand.  Model : $this->model.  year : $this->year.";
    }

}

// OBJECTS
$exercices1 = new Car();

$exercices1->setDetails("Renault", "Scenic", "2019");

echo $exercices1->displayDetails()

?>

<!-- 2️⃣ Exercice : Propriétés avec visibilité
Objectif : Comprendre la visibilité des propriétés.
Instruction :

Modifie la classe Car pour rendre brand public, model private et year protected.
Essaie d’accéder à chaque propriété depuis l’extérieur de la classe. Observe ce qui fonctionne et ce qui ne fonctionne pas.
Crée des getters et setters pour accéder aux propriétés privées et protégées. -->


<?php 

class Car2 {
    public $brand;
    private $model;
    protected $year;


    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }
}

$exercices2 = new Car2();

$exercices2->setBrand("Renault");
$exercices2->setModel("Scenic 2.0");
$exercices2->setYear(2019);

// echo " <br> Brand :  {$exercices2->brand}  <br>"; ACCESSIBLES DIRECTEMENT à cause de son propriété public
// echo " <br> Model :  {$exercices2->model}  <br>"; NON-ACCESSIBLES DIRECTEMENT à cause de son propriété private
// echo " <br> Year :  {$exercices2->year}  <br>"; NON-ACCESSIBLES DIRECTEMENT à cause de sn propriété protected

echo " <br> Brand :  {$exercices2->getBrand()}  <br>";
echo " <br> Model :  {$exercices2->getModel()}  <br>";
echo " <br> Year :  {$exercices2->getYear()}  <br>";




// WITH THE DRY METHOD 

class Car3 {
    public $brand;
    private $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }
}

$exercices2_1 = new Car3("Renault", "Scenic 2.0", 2019);

echo "<br> Brand : {$exercices2_1->getBrand()} <br>";
echo "Model : {$exercices2_1->getModel()} <br>";
echo "Year : {$exercices2_1->getYear()} <br>";


?>


<!-- 3️⃣ Exercice : Constructeur et destructeur
Objectif : Pratiquer l’utilisation de __construct et __destruct.
Instruction :

Ajoute un constructeur à la classe Car pour initialiser les propriétés.
Ajoute un destructeur qui affiche un message lorsque l'objet est détruit.
Instancie plusieurs objets et détruis-les avec unset() pour observer le destructeur en action. -->

<?php 

class Exer3 {
    
    public $brand;
    private $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function __destruct() {

        echo "The Objet has been destruid yohohohohoh, hhahahahaahhahahaahah";

    }

}

$Exer_3 = new Exer3("Boat", "Camion", 1888);
$Exer_3_1 = new Exer3("Renault", "Camion", 2000);

echo "<br> {$Exer_3->getBrand()} <br>";  // Boat
echo "<br> {$Exer_3->getModel()} <br>";  // Camion
echo "<br> {$Exer_3->getYear()} <br>";  //1888

unset($Exer_3); // The Objet has been destruid yohohohohoh, hhahahahaahhahahaahah

echo "<br> {$Exer_3_1->getBrand()} <br>"; // Renault
echo "<br> {$Exer_3_1->getModel()} <br>";  // Camion
echo "<br> {$Exer_3_1->getYear()} <br>";  // 2000




?>


<!-- 4️⃣ Exercice : Héritage
Objectif : Maîtriser l’héritage de classe.
Instruction :

Crée une classe ElectricCar qui hérite de Car.
Ajoute une propriété spécifique batteryCapacity et une méthode chargeBattery().
Redéfinis la méthode displayDetails() pour inclure la capacité de la batterie. -->


<?php 

class ElectricCar extends Car {

    public $batteryCapacity;

    public function chargeBattery($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    public function displayDetails() {
        return parent::displayDetails() . " Battery Capacity : $this->batteryCapacity kwh <br>";
    }
}

$exo4 = new ElectricCar();

$exo4->setDetails("Tesla", "Model S", 2019);
$exo4->chargeBattery(100);

echo $exo4->displayDetails(); // Brand : Tesla. Model : Model S. year : 2019. Battery Capacity : 100 kwh

?>


<!-- 5️⃣ Exercice : Polymorphisme
Objectif : Comprendre la redéfinition de méthodes.
Instruction :

Crée une classe SportsCar qui hérite également de Car.
Redéfinis la méthode displayDetails() pour ajouter une phrase comme « This is a sports car! ».
Crée un objet de Car, un de ElectricCar, et un de SportsCar. Appelle la méthode displayDetails() pour chacun. -->

<?php 

    class SportsCar extends Car {

        public function displayDetails() {
            return parent::displayDetails() . "This is a sports car !" ;
        }

        

    }


    // OBJECT
    $Exo5Car = new Car();
    $Exo5ElectricCar = new ElectricCar();
    $Exo5SportCar = new SportsCar();
    
    // Leurs Settlers
    $Exo5Car->setDetails("Renault", "Scenic", "2019");

    $Exo5ElectricCar->setDetails("Testla", "Model S", 2020);
    $Exo5ElectricCar->chargeBattery(100);
    
    $Exo5SportCar->setDetails("Ferrari", "488 Spider", 2021);


    echo "<br>" . $Exo5Car->displayDetails() . "<br>";
    echo $Exo5ElectricCar->displayDetails() . "<br>";
    echo $Exo5SportCar->displayDetails() . "<br> <br>";

?>


<!-- 6️⃣ Exercice : Interfaces
Objectif : Apprendre à implémenter des interfaces.
Instruction :

Crée une interface Vehicle avec deux méthodes : startEngine() et stopEngine().
Implémente cette interface dans les classes Car et ElectricCar.
Appelle ces méthodes pour tester leur fonctionnement. -->


<?php 

// 1️⃣ Définition de l'interface Vehicle
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}


// 2️⃣ Classe Car implémentant l'interface Vehicle

class Car6 implements Vehicle {

    public $brand;
    public $model;
    public $year;

    public function setDetails($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        return "Brand : $this->brand. Model : $this->model. Year: $this->year <br>";
    }

    public function startEngine() {
        return "Engine started for the car : $this->brand  $this->model.";
    }

    public function stopEngine() {
        return "Engine stopped for the car : $this->brand  $this->model";
    }
}


// 3️⃣ Classe ElectricCar implémentant l'interface Vehicle

class ElectricCar6 implements Vehicle {

    public $brand;
    public $model;
    public $year;
    public $batteryCapacity;


    public function setDetails($brand, $model, $year) {

        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;

    }

    public function startEngine() {
        return "Engine start for the electric car : $this->brand  $this->model";
    }

    public function stopEngine() {
        return "Engine stop for the electric car : $this->brand  $this->model";
    }


    public function chargeBattery($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }
}   

$car6 = new Car6();
$car6->setDetails("Renault", "Clio", 2003);

echo "<br>" . $car6->startEngine() . "<br>";
echo $car6->stopEngine() . "<br>";


$ElectricCar6 = new ElectricCar6();
$ElectricCar6->chargeBattery(100);

$ElectricCar6->setDetails("Tesla", "Model S", 2020);

echo "<br>" . $ElectricCar6->startEngine() . "<br>";
echo $ElectricCar6->stopEngine() . "<br>";

?>


<!-- 7️⃣ Exercice : Traits
Objectif : Réutiliser du code avec les traits.
Instruction :

Crée un trait Maintenance avec une méthode scheduleService() qui retourne un message du type : « Service scheduled for next month. »
Inclue ce trait dans les classes Car et ElectricCar. -->


<?php 

trait Maintenace {
    public function scheduleService() {
        return "Service scheduled for nex month";
    }
}

class Car7 {

    use Maintenace;

}

class ElectricCar7 {
    
    use Maintenace;

}

$car7 = new Car7();
$ElectricCar7 = new ElectricCar7();

echo "<br>" . $car7->scheduleService() . "<br>";
echo $ElectricCar7->scheduleService() . "<br> <br>";

?>


<!-- 8️⃣ Exercice : Méthodes magiques
Objectif : Comprendre les méthodes spéciales en PHP.
Instruction :

Ajoute une méthode magique __get() à la classe Car pour accéder aux propriétés privées d’une manière contrôlée.
Ajoute __toString() pour retourner une chaîne formatée avec les détails de la voiture.
Ajoute __call() pour gérer les appels à des méthodes inexistantes. -->


<?php 

class Car8 {

    // Private properties
    private $make;
    private $model;
    private $year;

    // Constructor to initialize properties
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Magic method __get() to access private properties
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            return "Property '$property' does not exist.";
        }
    }

    // Magic method __toString() to return a formatted string
    public function __toString() {
        return "Car Details: {$this->year} {$this->make} {$this->model}";
    }

    // Magic method __call() to handle calls to undefined methods
    public function __call($method, $arguments) {
        return "Method '$method' does not exist. Arguments:" . implode(', ', $arguments);
    }

}

// Example usage
$car8 = new Car8("Toyota", "Corolla", 2022);


// Accessing private properties using __get()
echo $car8->make . "\n"; // Output: Toyota
echo $car8->model . "\n"; // Output: Corolla
echo $car8->year . "\n"; // Output: 2022
echo $car8->color . "\n"; // Output: Property 'color' does not exist.


// Using __toString() to print the object
echo $car8 . "\n"; // Output: Car Details: 2022 Toyota Corolla


// Calling an undefined method using __call()
echo $car8->startEngine("Key", "Ignition") . "\n"; // Output: Method 'startEngine' does not exist. Arguments: key, ignition

?>


<!-- 9️⃣ Exercice : Static Methods and Properties
Objectif : Utiliser des propriétés et méthodes statiques.
Instruction :

Ajoute une propriété statique numberOfCars à la classe Car qui compte combien de voitures ont été créées.
Crée une méthode statique getNumberOfCars() pour accéder à cette propriété.
Teste en créant plusieurs objets et en vérifiant la valeur de numberOfCars. -->


<?php 

class Car {
    // Static property to count the number of cars
    private static $numberOfCars = 0;

    // Private properties
    private $make;
    private $model;
    private $year;

    // Constructor to initialize properties and increment the car count
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;

        // Increment the car count
        self::$numberOfCars++;
    }

    // Static method to get the number of cars created
    public static function getNumberOfCars() {
        return self::$numberOfCars;
    }

    // Magic method __toString() to return a formatted string
    public function __toString() {
        return "Car Details: {$this->year} {$this->make} {$this->model}";
    }
}

// Example usage
echo "Number of cars created: " . Car::getNumberOfCars() . "\n"; // Output: Number of cars created: 0

$car1 = new Car("Toyota", "Corolla", 2022);
echo "Number of cars created: " . Car::getNumberOfCars() . "\n"; // Output: Number of cars created: 1

$car2 = new Car("Honda", "Civic", 2021);
echo "Number of cars created: " . Car::getNumberOfCars() . "\n"; // Output: Number of cars created: 2

$car3 = new Car("Ford", "Mustang", 2020);
echo "Number of cars created: " . Car::getNumberOfCars() . "\n"; // Output: Number of cars created: 3

// Print details of the cars
echo $car1 . "\n"; // Output: Car Details: 2022 Toyota Corolla
echo $car2 . "\n"; // Output: Car Details: 2021 Honda Civic
echo $car3 . "\n"; // Output: Car Details: 2020 Ford Mustang

?>


<!-- 🔟 Exercice : Design Patterns
Objectif : Appliquer des patterns de conception orientée objet.
Instruction :

Singleton : Crée une classe Logger qui ne peut avoir qu’une seule instance. Ajoute une méthode log() pour enregistrer un message.
Factory : Crée une classe CarFactory qui génère des instances de Car selon la marque et le modèle.
Dependency Injection : Crée une classe CarService qui dépend d’une instance de Car. Utilise un constructeur pour injecter cette dépendance. -->


<?php
// Singleton Pattern: Logger Class
class Logger {
    // Hold the single instance of the class
    private static $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {}

    // Method to get the single instance of the class
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    // Method to log a message
    public function log($message) {
        echo "Log: $message\n";
    }
}

// Example usage
$logger = Logger::getInstance();
$logger->log("This is a log message."); // Output: Log: This is a log message.

// Attempting to create another instance will return the same instance
$logger2 = Logger::getInstance();
$logger2->log("Another log message."); // Output: Log: Another log message.

// Check if both instances are the same
var_dump($logger === $logger2); // Output: bool(true)
?>



<?php
// Factory Pattern: CarFactory Class
class Car10 {
    private $make;
    private $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getDetails() {
        return "Car: {$this->make} {$this->model}";
    }
}

class CarFactory {
    public static function createCar($make, $model) {
        return new Car10($make, $model);
    }
}

// Example usage
$car1 = CarFactory::createCar("Toyota", "Corolla");
echo $car1->getDetails() . "\n"; // Output: Car: Toyota Corolla

$car2 = CarFactory::createCar("Honda", "Civic");
echo $car2->getDetails() . "\n"; // Output: Car: Honda Civic
?>



<?php
// Dependency Injection: CarService Class
class CarService {
    private $car;

    // Inject the Car dependency via the constructor
    public function __construct(Car10 $car) {
        $this->car = $car;
    }

    // Method to perform a service action
    public function service() {
        echo "Servicing " . $this->car->getDetails() . "\n";
    }
}

// Example usage
$car = new Car10("Ford", "Mustang");
$carService = new CarService($car);
$carService->service(); // Output: Servicing Car: Ford Mustang
?>


<!-- Bonus : Mini-projet
Objectif : Combiner plusieurs concepts.
Instruction :

Crée une application PHP pour gérer un parc de véhicules.
Classe principale : Vehicle avec des classes enfants comme Car, Truck, et Motorcycle.
Implémente des interfaces comme Repairable pour gérer l’entretien.
Utilise des traits pour des fonctionnalités communes (e.g., maintenance, inspection).
Ajoute une méthode statique pour compter le nombre total de véhicules dans le parc. -->


<!-- Conseils
Teste chaque concept indépendamment avant de passer à l’étape suivante.
Documente ton code pour t’habituer à expliquer ce que fait chaque classe ou méthodes -->
    
</body>
</html>