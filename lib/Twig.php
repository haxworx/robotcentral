<?php

require_once 'src/common.php';
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(project_root_directory() . '/templates');

$twig = new \Twig\Environment($loader, [
	#'cache' => 'tmp/cache',
	'cache' => false,
]);

?>
