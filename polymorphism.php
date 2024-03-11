<?php
interface Person {
    public function getName();
}

class Employee implements Person {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName() {
        return $this->firstName . " " . $this->lastName;
    }
}

class Student implements Person {
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName() {
        return $this->lastName . ", " . $this->firstName;
    }
}

$person1 = new Employee("Huleis", "Al Alawi");
$person2 = new Student("Said", "Al Farsi");

echo $person1->getName() . "\n";
echo $person2->getName() . "\n";

?>