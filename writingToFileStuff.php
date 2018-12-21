<?php
    $filename = "C:/users/bkielpinski/dev/php/initialPractice/someNewFile.txt";
    $file = fopen( $filename, "w" );

    if( $file == false ){
        echo ( "Error in opening new file" );
        exit();
    }
    fwrite($file, "This is a simple test\n");
    fclose($file);

?>
<html>
    <head>
        <title>Writing a file using PHP</title>
    </head>

    <body>
        <?php
            $filename = "someNewFile.txt";
            $file = fopen( $filename, "r");

            if ($file == false){
                echo ("Error in opening file");
                exit();
            }
            $fileExists = file_exists("someNewFile.txt");
            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);

            fclose($file);

            echo ("File exists: $fileExists");
            echo ("File size : $filesize bytes");
            echo ("$filetext");
            echo ("file name: $filename");
        ?>

    </body>
</html>
