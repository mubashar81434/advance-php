<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: black; color: white;">

    <!-- class, object, this and new in OOP -->

    
    <?php

        /*
        echo "working";
        echo "<br>";
        class Car{
            // class k ander computed values assign nhi kr skty 

            // values
            public $name="Toyota";
            public $brand;
            public $color;
            
            // methods
            function showModel($number){
                $this->model = $number;
                echo "Model is $this->model";
            }
        }

        $car1 = new Car; 

        echo "$car1->name"."<br>";
        $car1->showModel("al34");
        */
    ?>

    <!-- Constructor and Destructor -->

    <?php
        /*
        // Constructor automatically call ho jata h jb hm class sy object bnaty h using new keyword
        // constructor has special name in php __construct
        // decleration
        class Student{
            function __construct(){
                echo "Constructor called"."<br>";
            }
        }
        $stu1 = new Student;  // automatically calls jb object bna

        // types of constructors
        //  (i) default (ii) parameterized constructor

        class Car{

            public $brand;

            function __construct($brandNumber){
                $this->brand = $brandNumber;
                echo "Brand is $this->brand";
            }

        }
        $car1 = new Car(321);
        */

    ?>

    <!-- Destructors -->

    <?php 
        // Jb hmy kisy object ko destory krna ho tb destructure ko call krty h 
        // jb hmry object ka scope khtm hota h tu destructure function automatically call hota h 
        // destructure name in php is __destruct
        // destructre ka koi b argumnet nhi hota 

        /*
        class Student{

            function __construct($acceptParameter){
                echo "Constructor function call automatically";
                echo "<br>";
                echo "Parameter passed as an argument - $acceptParameter";
                echo "<br>";
            }

            function __destruct(){
                echo "Destructor function call automatically";
                echo "<br>";
            }

        }

        $student1 = new Student("Passed parameter");
        */
    ?>

    <!-- Inheritance -->

    <?php
        /*
        // The mechanism of deriving a new class from old one is called inheritance 
        // parent class ko base class b khty h 
        // child class ko child ya extended class b khty h 
        
        // types of inheritannce
        // single, multi-level and hierarchical inheritance

        // single inheritance

        class Father {

            public $a;

            public $b;

            function setValues($x, $y){
                $this->a = $x;
                $this->b = $y;
            }

        }

        //  Son class extended from father 

        class Son extends Father{

            function display(){
                echo "Value in A : $this->a <br>";
                echo "Value in B : $this->b <br>";
            }

        }

        $son1 = new Son; // new instance of Son class with the name son1
        $son1->setValues(2,3); // method called from Father class because of inheritance 
        $son1->display();
        */
    ?>

    <!-- Access specifier/modifier -->

    <?php
    
        /*
        // public, private and protected access modifier
        // public sccess specifier ko kahi sy b access kiya ja skta h 

        class ClassName{
 
            public $r = "alpha";

            // private $r = "alpha";

            // function disp(){
            //     echo "$this->r <br>";
            // }

            function disp(){
                echo "$this->r <br>";
            }

        }

        class MyClassExt extends ClassName{
            
           function show(){
                echo $this->r;
           }
           
        }

        $newChildClass = new MyClassExt;

        $newChildClass->show();

        */
    ?>


</body>
</html>