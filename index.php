<?php

require_once 'src/Database.php';
require_once 'src/Twig.php';

$robots = [];

try {
	$db = new DB;
	$SQL = "SELECT domain, start_time, weekday FROM tbl_crawl_launch";
	$stmt = $db->pdo->prepare($SQL);
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$robots[] = ['domain' => $row['domain'], 'start_time' => $row['start_time'], 'weekday' => $row['weekday']];
	}

} catch (Exception $e) {
	http_response_code(500);
	return;
}

$template = $twig->load('index.html.twig');

echo $template->render(['robots' => $robots ]);

?>
