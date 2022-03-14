<?php

require_once '../src/common.php';
require_once 'src/Twig.php';

$weekly = false;

if (isset($_GET['weekly'])) {
	$weekly = true;
}

$template = $twig->load('create.html.twig');

echo $template->render(['weekly' => $weekly ]);

?>
