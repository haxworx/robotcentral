<?php

class Config
{
	public $settings = [];
	public function __construct($path='')
	{
		$ini = parse_ini_file($path, true);
		if (!$ini) {
			throw new Exception("parse_ini_file");
		}
		$this->settings = $ini;
	}
}
