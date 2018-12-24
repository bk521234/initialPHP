<html>
   <body>
      
<?php
$note=<<<XML

<note>
   <to>Gopal K Verma</to>
   <from>Sairamkrishna</from>
   <heading>Project submission</heading>
   <body>Please see clearly </body>
</note>

XML;
// NOTE − You can use function simplexml_load_file( filename) if you have XML content in a file.
$xml=simplexml_load_string($note); 
print_r($xml);
?>
		
   </body>
</html>