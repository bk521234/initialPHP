<?php
    class php {
        var $var1;
        var $var2 = "constant string";

        function myfunc($arg1, $arg2){
            // do function stuff
        }
        // ..other class methods and members..

    }

    class Books {
        /* Member variables */
        var $price;
        var $title;
        
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
     }

   $physics = new Books; // instantiate new instances/ objects
   $maths = new Books;
   $chemistry = new Books;

   $physics->setTitle( "Physics for High School" ); // set titles
   $chemistry->setTitle( "Advanced Chemistry" );
   $maths->setTitle( "Algebra" );
   
   $physics->setPrice( 10 ); // set prices
   $chemistry->setPrice( 15 );
   $maths->setPrice( 7 );

   $physics->getTitle(); // get titles
   $chemistry->getTitle();
   $maths->getTitle();

   $physics->getPrice(); // get prices
   $chemistry->getPrice();
   $maths->getPrice();



?>