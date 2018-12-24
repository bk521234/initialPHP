<?php
   $dbhost = 'localhost';
   $dbuser = 'salvidor';
   $dbpass = 'notThePassword';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn ));
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysqli_select_db( $conn, 'test_db');
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error( $conn ));
   }
   
   while($row = mysqli_fetch_array($retval)) {
      echo "EMP ID :{$row['emp_id']}  <br>\n ".
         "EMP NAME : {$row['emp_name']} <br>\n ".
         "EMP SALARY : {$row['emp_salary']} <br>\n ".
         "--------------------------------<br>\n";
   }
   
   mysqli_free_result($retval);
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>

