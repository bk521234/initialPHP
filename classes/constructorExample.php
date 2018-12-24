<?php
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

    $physics = new Books( "Physics for High School", 10 );
    $chemistry = new Books ("Algebra", 7 );
    $maths = new Books ( "Advanced Chemistry", 15 );
    
    /* Get those set values */
    $physics->getTitle();
    $chemistry->getTitle();
    $maths->getTitle();
    
    $physics->getPrice();
    $chemistry->getPrice();
    $maths->getPrice();
        
?>