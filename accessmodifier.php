<?php
    class MyClass {
        // public property
        public $publicProperty = "I'm a public property";
        
        // private property
        private $privateProperty = "I'm a private property";
        
        // protected property
        protected $protectedProperty = "I'm a protected property";
        
        // public method
        public function publicMethod() {
            echo "I'm a public method.<br>";
        }
        
        // private method
        private function privateMethod() {
            echo "I'm a private method.<br>";
        }
        
        // protected method
        protected function protectedMethod() {
            echo "I'm a protected method.<br>";
        }
        
        // public method to access private property
        public function accessPrivateProperty() {
            echo "I'm accessing the private property: " . $this->privateProperty;
        }
    }

    // create an object of MyClass
    $obj = new MyClass();

    // access public property
    echo $obj->publicProperty; // outputs: I'm a public property

    // call public method
    $obj->publicMethod(); // outputs: I'm a public method.

    // create a subclass of MyClass
    class MySubClass extends MyClass {
        // public method to access protected property
        public function accessProtectedProperty() {
            echo "I'm accessing the protected property: " . $this->protectedProperty;
        }
    }

    // create an object of MySubClass
    $subObj = new MySubClass();

    // access protected property through subclass
    $subObj->accessProtectedProperty(); // outputs: I'm accessing the protected property: I'm a protected property
?>