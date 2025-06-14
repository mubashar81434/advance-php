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
     

</body>
</html>