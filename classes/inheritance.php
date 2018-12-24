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
           echo $this->publisher. "<br />";
        }
     }



?>