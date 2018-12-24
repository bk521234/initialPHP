<?php
   
   $dbhost = "localhost";
   $dbuser = "salvidor";
   $dbpass = "notThePassword";
   $dbname = "test_db";
   
   //Connect to MySQL Server
   mysqli_connect($dbhost, $dbuser, $dbpass);
   
   //Select Database
   mysqli_select_db( $conn, $dbname) or die(mysqli_error( $conn ));
   
   // Retrieve data from Query String
   $age = $_GET['age'];
   $sex = $_GET['sex'];
   $wpm = $_GET['wpm'];
   
   // Escape User Input to help prevent SQL Injection
   $age = mysqli_real_escape_string($conn, $age);
   $sex = mysqli_real_escape_string($conn, $sex);
   $wpm = mysqli_real_escape_string($conn, $wpm);
   
   //build query
   $query = "SELECT * FROM ajax_example WHERE sex = '$sex'";
   
   if(is_numeric($age))
   $query .= " AND age <= $age";
   
   if(is_numeric($wpm))
   $query .= " AND wpm <= $wpm";
   
   //Execute query
   $qry_result = mysqli_query( $conn, $query) or die(mysqli_error( $conn ));
   
   //Build Result String
   $display_string = "<table>";
   $display_string .= "<tr>";
   $display_string .= "<th>Name</th>";
   $display_string .= "<th>Age</th>";
   $display_string .= "<th>Sex</th>";
   $display_string .= "<th>WPM</th>";
   $display_string .= "</tr>";
   
   // Insert a new row in the table for each person returned
   while($row = mysqli_fetch_array($qry_result)) {
      $display_string .= "<tr>";
      $display_string .= "<td>$row[name]</td>";
      $display_string .= "<td>$row[age]</td>";
      $display_string .= "<td>$row[sex]</td>";
      $display_string .= "<td>$row[wpm]</td>";
      $display_string .= "</tr>";
   }
   echo "Query: " . $query . "<br />";
   
   $display_string .= "</table>";
   echo $display_string;
   echo "this is a result.";
?>
