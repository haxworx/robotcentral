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
		foreach ($ini as $section => $name) {
			$this->settings[$section] = [];
			if (is_array($name)) {
				foreach ($name as $key => $value) {
					$this->settings[$section][$key] = $value;
				}
			} else {
				throw new Exception("ini file format.");	
			}
		}
	}
}
