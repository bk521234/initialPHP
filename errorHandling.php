<?php
    error_reporting( E_ERROR );

    function handleError($errno, $errstr, $error_file, $error_line){
        echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
        echo "<br />";
        echo "Terminating PHP script.";

        die();
    }
    function myFunction(){
        echo "Program completed successfully.\n";
    }

    // set erro handler
    set_error_handler("handleError");

    // trigger error
    myFunction();
?>
