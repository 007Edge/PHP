<?php 
    

    class Student {
        private $name;
        private $age;

        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }    
        
        function getName() {
            
            return $this->name;
        }

        function getAge() {
            return $this->age;
        }

        function rearr() {
            $arr = [$this->name, $this->age];
            return $arr;
            
        }


        
    }

    $s = new Student("Shivam", 20);
    

    echo "Name: ".$s->getName()."<br>";
    echo "Age: ".$s->getAge()."<br>";
    $arr = $s->rearr();
    echo "Name: ".$arr[0]."<br>Age: ".$arr[1];

    



?>