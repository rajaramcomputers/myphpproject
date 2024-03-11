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

class student extends person{
    private $semester = 0;
    
    function getSemester(){
        return $this->semester;
    }
    function setSemester($value){
        $this->semester = $value;
    }
}

class teacher extends person{
    private $department = 'ABT';
        
    function getDepartment(){
        return $this->department;
    }
        function setDepartment($value){
            $this->department = $value;
        }   

}

$student1 = new student;
$student1->setName("ahmed", "brasidi");
$student1->setSemester(5);
echo "<p>Firstname: ". $student1->getFirstname(). "</p>";
echo "<p>Sur Name : ". $student1->getSurname(). "</p>";
echo "<p>Semester : ". $student1->getSemester(). "</p>";

$teacher1 = new teacher;
$teacher1->setName("Gaurav", "Bhatia");
$teacher1->setDepartment('IT');
echo "<p>Firstname: ". $teacher1->getFirstname(). "</p>";
echo "<p>Sur Name : ". $teacher1->getSurname(). "</p>";
echo "<p>Semester : ". $teacher1->getDepartment(). "</p>";

?>