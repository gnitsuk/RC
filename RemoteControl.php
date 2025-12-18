<?php

require("../PHPUtilities/Utilities.php");

$functionCall = $_POST["szFunctionCall"];

$parameters = explode("_", $functionCall);

//$utilities = new Utilities();

//$result = $utilities->SayNo();

echo $parameters[0]($parameters[1]);

function ReturnWhenFileChanges($szFile)
{
	while(file_exists($szFile))
	{
		sleep(1);
	}

	//$bFileExists = false;

	//if(file_exists($szFile))
	//{
		$bFileExists = true;
	//}

	//return $bFileExists ? "true" : "false";

	return "OK";
}

?>
