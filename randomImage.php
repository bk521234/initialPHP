<html>
   <body>
   
      <?php
         srand( microtime() * 1000000 );
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "./art.jpg";
               break;
            
            case 2: $image_file = "./zen2.jpg";
               break;
            
            case 3: $image_file = "./zen.jpeg";
               break;
            
            case 4: $image_file = "./art.jpg";
               break;
         }
         echo "Random Image : <img src=$image_file />";
      ?>
      
   </body>
</html>
