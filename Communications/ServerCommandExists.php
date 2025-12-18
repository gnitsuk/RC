<?php

    $szFile = 'ServerCommand.txt';

	$bExists = "false";

	if(file_exists($szFile))
	{
	  $fileSize = filesize($szFile);
  
      if($fileSize > 0)
      {
		$fh = fopen($szFile,'r');

        $bExists = fread($fh,$fileSize);

		fclose($fh);

		$fh = fopen($szFile,'w');

		fclose($fh);

      }
	}

    echo $bExists;
?>
