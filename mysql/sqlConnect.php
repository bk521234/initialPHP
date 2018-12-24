<?php
    $dbhost = 'localhost';
    $dbuser = 'salvidor';
    $dbpass = 'notThePassword';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "mydb");

    if(! $conn ){
        die('Could not connect: '. mysqli_connect_error());
    }

    echo 'Connected successfully.';
    mysqli_close($conn);
?>
