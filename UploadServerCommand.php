<?php 

$content = $_POST["szContent"];

$fh = fopen('Communications/ServerCommand.txt','w');

fwrite($fh,$content);
fclose($fh);
  
echo $content;

?>
