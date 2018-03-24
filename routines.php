<?php
	require_once __DIR__.'/vendor/autoload.php';

	function clearInput($input) 
	{
		return htmlspecialchars(strip_tags($input));
	}

?>