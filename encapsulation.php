<?php 
class person{
    private $strFirstname = "Ram";
    private $strSurname = "Kumar";
    function getFirstname(){
        return $this->strFirstname;
    }
    function getSurname(){
        return $this->strSurname;
    }

    function setName($firstName, $surName)
    {
        $this->strFirstname = $firstName;
        $this->strSurname = $surName;
    }
}
$student1 = new student;
$student1->setName("ahmed", "brasidi");
 
echo "<p>Firstname: ". $student1->getFirstname(). "</p>";
echo "<p>Sur Name : ". $student1->getSurname(). "</p>";
?>