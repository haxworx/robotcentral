<?php

require_once 'src/Database.php';
require_once 'src/Twig.php';
require_once 'src/Robot.php';

$db = new DB;

$controller = new RobotController($db);
$activeRobots = $controller->getActive();

$template = $twig->load('index.html.twig');

echo $template->render(['activeRobots' => $activeRobots ]);

?>