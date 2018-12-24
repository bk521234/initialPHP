<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn ));
   }
	
   $table_name = "employee";
   $backup_file  = "/tmp/employee.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   mysqli_select_db( $conn, 'test_db');
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysqli_error( $conn ));
   }
   
   echo "Backedup  data successfully\n";
   
   mysqli_close($conn);
?>
