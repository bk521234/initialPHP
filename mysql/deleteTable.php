<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "test_db");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn ));
   }
   
   $sql = 'DROP TABLE employee';
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not delete table employee: ' . mysqli_error( $conn ));
   }
   
   echo "Table deleted successfully\n";
   
   mysqli_close($conn);
?>
