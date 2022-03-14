<?php

$path = get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/..');
set_include_path($path);

function project_root_directory()
{
	static $path = null;

	if ($path === null) {
   		$path = realpath(dirname(__FILE__) . '/..');
	}
	return $path;
}

?>
