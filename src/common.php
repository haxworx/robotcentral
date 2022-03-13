<?php

function project_root_directory()
{
	static $path = null;

	if ($path === null) {
   		$path = realpath(dirname(__FILE__) . '/..');
	}
	return $path;
}

?>
