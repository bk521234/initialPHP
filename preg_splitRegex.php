<?php
   $ip = "123.456.789.000"; // some IP address
   $iparr = preg_split ("/\./", $ip); 
   
   print "$iparr[0] <br />";
   print "$iparr[1] <br />" ;
   print "$iparr[2] <br />"  ;
   print "$iparr[3] <br />\n"  ;
?>
