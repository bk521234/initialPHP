<?php
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE");

    // Valid constant names
    define("ONE",     "first thing");
    define("TWO2",    "second thing");
    define("THREE_3", "third thing");

    // Invalid constant names
    #define("2TWO",    "second thing");
    #define("__THREE__", "third value"); 

    echo constant("ONE");
    echo constant("TWO2");
    echo constant("THREE_3");

    // PHP magic constants
    echo __LINE__ // current line number of the file.
    echo __FILE__ // the full path and filenamt of the file. 
    echo __FUNCTION__ // returns the function name as it was declared.
    echo __CLASS__ // returns the class name as it was declared.
    echo __METHOD__ // the method name is returned as it was declared.

?>
