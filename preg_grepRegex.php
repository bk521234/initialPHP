<?php
   $foods = array("pasta", "steak", "fish", "potatoes");
   
   // find elements beginning with "p", followed by one or more letters.
   $p_foods = preg_grep("/p(\w+)/", $foods);
   
   print "Found food is " . $p_foods[0] . "\n";
   print "Array: " . implode(" | ", $p_foods) . "\n";
?>
