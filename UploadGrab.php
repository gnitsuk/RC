<?php

$uploaddir = 'Communications/';

$szResult = "";

if (is_uploaded_file($_FILES['file']['tmp_name']))
{
	$uploadfile = $uploaddir.basename($_FILES['file']['name']);

	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
	{
		$szResult = "Screen grab uploaded successfully.";
	}
	else
	{
		$szResult = "Move to upload folder failed.";
	}
}

else
{
	$szResult = "Screen grab upload failed.";
}

echo $szResult;

?> 
