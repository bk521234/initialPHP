<?php
    function exception_handler($exception){
        echo "Uncaught exception: ", $exception->getMessage(), "\n";
    }

    set_exception_handler('exception_handler');
    throw new Exception('Uncaught Exception blahhhhhhhhhhhhhhhh');

    echo "Not executed.\n";
?>
