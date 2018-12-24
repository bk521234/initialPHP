<?php
    $dbhost = 'localhost';
    $dbuser = 'salvidor';
    $dbpass = 'notThePassword';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn){
        dir('Could not connect: '. mysqli_error( $conn ));
    }

    echo 'Connected successfully\n';

    $sql = 'CREATE Database test_db';
    $retval = mysqli_query( $conn, $sql );

    if (! $retval ){
        die('Could not create database: '. mysqli_error( $conn ));
    }

    echo "Database test_db created successfully\n";
    mysqli_close($conn);
?>


