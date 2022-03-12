<?php

class PDOext extends PDO
{
	public function __construct($file = 'config.txt')
	{
		if (!$settings = parse_ini_file($file, TRUE))
			throw new exception("Unable to open '$file'");
		$dns = 'mysql' . ':host=' . $settings['database']['host'] .
			';dbname=' . $settings['database']['name'];

		parent::__construct($dns, $settings['database']['user'], $settings['database']['pass']);
	}
}

?>
