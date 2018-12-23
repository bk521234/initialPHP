<?php
    // ereg_replace has been deprecated. 
    $copy_date = "Copyright 1999";
    $copy_date = ereg_replace("([0-9]+)", "2000", $copy_date);

    print $copy_date;
?>
