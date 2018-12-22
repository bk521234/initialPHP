<?php
   session_start(); 
   // session_destroy(); # can be used to destroy session
   // unset($_SESSION['counter']); # can be used to unset certain session cookies.

   // PHP also supports auto sessions.
   // You don't need to call start_session() function to start a session when a user
   // visits your site if you can set session.auto_start variable to 1 in php.ini file.
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= " in this session.";
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
   </body>
   
</html>