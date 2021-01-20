<?php

namespace App;

class Ajax
{
	private $params;

	public function __construct($params)
	{
		$this->params = $params;
		if (isset($this->params['success'])) {

		}
	}

	public function getData()
	{
		return file_get_contents($this->params['url']);
	}
}
