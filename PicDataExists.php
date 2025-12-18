<?php
    $szFile = 'PicData.jpg';

	$bExists = "false";

	if(file_exists($szFile))
	{
		$bExists = date ("F d Y H:i:s.", filemtime($szFile));
	}

    echo $bExists;
?>
