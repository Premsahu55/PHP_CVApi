<?php

namespace CVApi\Config;

trait Config
{
	private $config = [];
	protected $public_key;
	protected $secret_key;
	protected $password;
	protected $test;
	protected $route;
	protected $isPost;
	protected $path;

	protected function getConfigFile()
	{
		$this->config = include 'config/config.php';
		$this->setPublicKey();
		$this->setSecretKey();
		$this->setPassword();
		$this->setRoute();
		$this->setTest();
		$this->setIsPost();
		$this->setPath();
	}
	private function setPublicKey()
	{
		$this->public_key = $this->config['public_key'];
	}
	private function setSecretKey()
	{
		$this->secret_key = $this->config['secret_key'];
	}
	private function setPassword()
	{
		$this->password = $this->config['password'];
	}
	private function setRoute()
	{
		$this->route = $this->config['route'];
	}
	private function setTest()
	{
		$this->test = $this->config['test'];
	}
	private function setIsPost()
	{
		$this->isPost = $this->config['isPost'];
	}
	private function setPath()
	{
		$this->path = $this->config['path'];
	}
}