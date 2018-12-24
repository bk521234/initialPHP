<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "test_db");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error(  $conn ));
   }
   
   $query_file = 'sql_query.txt';
   
   $fp = fopen($query_file, 'r');
   $sql = fread($fp, filesize($query_file));
   fclose($fp); 
   
   mysqli_select_db( $conn, 'test_db');
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn ));
   }
   
   echo "Table employee1 created successfully\n";
   mysqli_close($conn);
?>
