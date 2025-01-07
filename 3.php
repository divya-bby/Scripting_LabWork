<?php

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    public function helloWorld() {
        return "Hello World<br>";
    }

    protected function helloFamily() {
        return "Hello Family<br>";
    }

    private function helloMe() {
        return "Hello me!<br>";
    }

    public function getTuition() {
        return $this->tuition;
    }

    public function __construct($name, $surname, $country, $tuition) {
        $this->name = $name;
        $this->surname = $surname;
        $this->country = $country;
        $this->tuition = $tuition;
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily(); 
    }
}

$student = new Student("Divya", "Adhikari", "Nepal", 10000);
$partTimeStudent = new PartTimeStudent("Pranika", "Adhikari", "Nepal", 15000);

echo $student->helloWorld();
echo $student->getTuition() . "<br>"; 

echo $partTimeStudent->helloParent(); 

?>
