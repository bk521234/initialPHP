<?php
   $userinfo = "Name: <b>John Poul</b> <br> Title: <b>PHP Guru</b>";
   preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
   
   print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
   print implode("|", $pat_array[0])."\n"
?>
