<?php

namespace CVApi;

use CVApi\Config\Config;
use CVApi\QueryBuilder\QueryBuilder;
use CVApi\Request\RequestController;
use CVApi\Contracts\QueryBuilderContract;

class CVApi extends RequestController implements QueryBuilderContract
{
	use Config;
	use QueryBuilder;

	private static $_instance = null;
	public $images = [];

	public function setConfig($config = null)
	{
		if($config != null) {
			$this->public_key = $config['public_key'];
			$this->secret_key = $config['secret_key'];
			$this->password = $config['password'];
		}
		if(isset($config['path'])) {
			$this->path = $config['path'];
		}
		return $this;
	}

	public function images($images = null)
	{
		if ($images === null) {
			$this->resources();
		} else {
			for($i = 0; $i < count($images); $i++) {
				$this->images[] = $images[$i];
			}
			$this->resources($this->images, 'image', 'image/png');
		}

		return $this;
	}

	public function receive(callable $c) {
		$this->sendPostRequest();

		for($i = 0; $i < count($this->result); $i++)
			$this->image[] = (json_decode($this->result[$i]))->photo;

		if (is_callable($c)) {
			call_user_func($c, $this);
		}

		return $this;
	}

	public function results(callable $c)
	{
		if(empty(self::$_instance->images))
		{
			$this->resources();
		}
		else
			$this->resources(self::$_instance->images, 'image', 'image/png');

		$this->sendPostRequest();
		for($i = 0; $i < count($this->result); $i++)
			$this->image[] = (json_decode($this->result[$i]))->photo;

		if (is_callable($c)) {
			call_user_func($c, $this);
		}
	}

	public function save($name)
	{
		for($i = 0; $i < count($this->result); $i++)
		{
			$data = base64_decode($this->image[$i]);
			file_put_contents($name[$i], $data);
		}
	}

	public static function __callStatic($method, $args)
	{



		if ($method === 'make')
		{
			if (self::$_instance === null)
            	self::$_instance = new self;

            if(!empty($args)) {
        		for($i = 0; $i < count($args[0]); $i++) {
        			self::$_instance->images[] = $args[0][$i];
        		}
        	}	
        	return self::$_instance;
		} else if ($method === 'test') {
			if (self::$_instance === null)
            	self::$_instance = new self;


			self::$_instance->testApp();

			$result = json_decode(self::$_instance->result[0]);
			echo $result->message;
		}
	}
	
}