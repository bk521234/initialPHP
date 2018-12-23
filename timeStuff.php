<?php
    $date_array = getdate();

    foreach ( $date_array as $key => $value ){
        print "$key = $value<br />\n";
    }

    $formatted_date = "Today's date: ";
    $formatted_date .= $date_array['mday'] . "/";
    $formatted_date .= $date_array['mon'] . "/";
    $formatted_date .= $date_array['year'] . "/";

    print $formatted_date;
?>
