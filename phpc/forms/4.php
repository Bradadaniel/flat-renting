<?php

$name = $_POST["name"];

if(!empty($name))
{
	
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>php 4</title>
    </head>
    <body>
<?php 
	echo "Hello $name <br />";
?>
   </body>
   </html>
<?php
}

else

{	
	header("Location:4ch.php?p=1");
	exit();
}

?>