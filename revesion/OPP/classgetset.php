<?php 
    

    class Student {
        public $name;
        public $age;

        function setValue($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        function getName() {
            return $this->name;
        }
        function getAge() {
            return $this->age;
        }
    }

    $p1 = new Student();
    $p1->setValue("shivam",20);
    echo "Name: ".$p1->getName()."<br>";
    echo "Age: ".$p1->getAge()."<br>";



?>