<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn ));
   }
   
   $sql = 'DROP DATABASE test_db';
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not delete database db_test: ' . mysqli_error( $conn ));
   }
   
   echo "Database deleted successfully\n";
   
   mysqli_close($conn);
?>
