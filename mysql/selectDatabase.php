<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) { 
      die('Could not connect: ' . mysqli_error());
   }
   
   echo 'Connected successfully';
   
   mysqli_select_db(  $conn, 'test_db' );
   mysqli_close($conn);
   
?>
