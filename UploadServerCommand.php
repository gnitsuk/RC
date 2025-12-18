<?php 

$content = $_REQUEST["szContent"];

$fh = fopen('Communications/ServerCommand.txt','w');

fwrite($fh,$content);
fclose($fh);
  
echo $content;

?>
