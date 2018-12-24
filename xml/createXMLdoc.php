<?php
    $channel = array('title' => "What's for dinner",
    'link' => "http://menu.example.com/",
    'description' => 'Choose what to eat tonight');

    print "<channel>\n";

    foreach ($channel as $element => $content){
        print "<$element>";
        print htmlentities($content);
        print "</$element>";
    }

    print "</channel>";
?>