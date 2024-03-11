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
}

$obj = new person;
echo "<p>Firstname: ". $obj->getFirstname(). "</p>";
echo "<p>Sur Name : ". $obj->getSurname(). "</p>";

?>