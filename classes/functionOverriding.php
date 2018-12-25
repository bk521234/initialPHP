<?php
    // PHP class definitions can optionally inherit from a parent class definition by using the extends clause.

    class Books {
        /* Member variables */
        var $price;
        var $title;
        
        // constructor - used to initialize variables upon object creation.
        function __construct( $par1, $par2 ) {
            $this->title = $par1;
            $this->price = $par2;
         }

        /* Member functions */
        function setPrice($par){
            $this->price = $par;
        }
        
        function getPrice(){
            echo $this->price ."<br/>";
        }
        
        function setTitle($par){
            $this->title = $par;
        }
        
        function getTitle(){
            echo $this->title ." <br/>";
        }

        function __destruct(){
            // used to release all the resources. (opposite of constructor)
        }
    }

    // subclass/ derived class Novel automatically has all the member variable declarations of the 
    //      parent class. it also has all the same member functions as the parent.
    class Novel extends Books {
        var $publisher;
        
        function setPublisher($par){
           $this->publisher = $par;
        }
        
        function getPublisher(){
           echo $this->publisher. "overwritten <br />";
        }

        function getPrice() {
            echo $this->price . "overwritten <br/>";
            return $this->price;
         }
            
         function getTitle(){
            echo $this->title . "overwritten <br/>";
            return $this->title;
         }

     }

     // private members.
     class MyClass {
         /* When MyClass class is inherited by another class using 
         extends, myPublicFunction() will be visible, as will $driver. 
         The extending class will not have any awareness of or access 
         to myPrivateFunction and $car, because they are declared private. */
        private $car = "skoda";
        $driver = "SRK";
        
        function __construct($par) {
           // Statements here run every time
           // an instance of the class
           // is created.
        }
        
        function myPublicFunction() {
           return("I'm visible!");
        }
        
        private function myPrivateFunction() {
           return("I'm  not visible outside!");
        }
     }


     // protected members accessible within in the class which it is declared as will as 
     // in classes that extend that class.
     class MyOtherClass {
        protected $car = "skoda";
        $driver = "SRK";
     
        function __construct($par) {
           // Statements here run every time
           // an instance of the class
           // is created.
        }
        
        function myPublicFunction() {
           return("I'm visible!");
        }
        
        protected function myPrivateFunction() {
           return("I'm  visible in child class!");
        }
     }

     // constants
     class MyOtherOtherClass {
        const requiredMargin = 1.7;
        
        function __construct($incomingValue) {
           // Statements here run every time
           // an instance of the class
           // is created.
        }
     }
?>