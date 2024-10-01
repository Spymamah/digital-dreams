<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Animal{
        public $name;
        public $color;
        public $body;
        public $legs;
        public $sound;

        function createAnimal($n, $c, $a){
            $this->name = $n;
            $this->color =$c;
            $this->legs = $a;
        }
        function addName($n){
            $this->name = $n;
           
        }
        // function sayName(){
        //     echo $this->name . "is my name";
        // }
        function addColor($c){
            $this->color =$c;
        }
        // function sayColor(){
        //     echo $this->color. "is my color";
        // }
        function addLegs($a){
            $this->legs = $a;
        }
        // function addLegNums(){
        //-m     echo $this->legs . "is the number of legs i have";
        // }
        function showAnimal(){ 
            echo $this->name . " is my name <br>";
            echo $this->color . " my color name is blue <br>";
            echo $this->legs . " is my legs <br>";

        }
        
    }
 $dog = new Animal();
 $dog -> addName("dog");
 $dog -> addColor("white");
 $dog -> addLegs(4);
 $dog -> showAnimal();

 echo $dog->name;
//  a car class

$hen = new Animal();
$hen -> addName("hen");
$hen -> addcolor("brown");
$hen -> addLegs("2");
$hen -> showAnimal();

$fish = new Animal();
$fish->createAnimal("shark", "white and Black" ,0);
$fish->showAnimal();


// a car class

class Car{
    public $name;
    public $model;
    public $yearOfProduction;
    public $speed;

    function __construct($name, $model, $year, $speed){
        $this->name = $name;
        $this->model = $model;
        $this->yearOfProduction = $year;
        $this->speed = $speed;

        echo $this->name . "is my Name<br>";
        echo $this->model . "is my Model<br>";
        echo $this->yearOfProduction . " is when i was made<br>";
        echo $this->speed . "is my speed limit";

    }
//     function showCar(){
//       echo $this->name . "is my Name<br>";
//         echo $this->model . "is my Model<br>";
//         echo $this->yearOfProduction . " is when i was made<br>";
//         echo $this->speed . "is my speed limit";

// }
}
 echo "<br>";

 $toyota = new car("toyota", "2000AG", "1714", "2000km/h");
//  $toyota -> showCar();

    ?>
</body>
</html>