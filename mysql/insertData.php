<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn ));
   }
   
   $sql = 'INSERT INTO employee '.
      '(emp_name,emp_address, emp_salary, join_date) '.
      'VALUES ( "guest", "XYZ", 2000, NOW() )';
      
   mysqli_select_db( $conn, 'test_db');
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error( $conn ));
   }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
?>
