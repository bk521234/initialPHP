<?php
    try{
        $error = 'Always throw this error';
        throw new Exception($error);

        // code fillowing an exception is not executed.
        echo 'Never executed';
    }catch (Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
        echo 'Caught exception: ', $e->getCode(), "\n";
        echo 'Caught exception: ', $e->getFile(), "\n";
        echo 'Caught exception: ', $e->getLine(), "\n";
        //echo 'Caught exception: ', $e->getTrace(), "\n";
        echo 'Caught exception: ', $e->getTraceAsString(), "\n";

    }

    // continue execution
    echo 'Hello world';
?>
