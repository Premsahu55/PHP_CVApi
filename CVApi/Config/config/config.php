<?php

return [

	/*
	 | Users should enter their public key provided when they create an application
	*/
	"public_key" => "pub-LprM/UGcPdq8bZApVc7wWuot4tIonnKGFVbfhJI/",

	/*
	 | Users should enter their secret key provided when they create an application
	*/
	"secret_key" => "sec-CeSUaOB27ORN7qMqpfNpMeBV+HGxXk4SeQ==",

	/*
	 | Password is used to authenticate the user
	*/
	"password" => "Oih7Mr9aOsUlkue6vLdEniBKOX8=",

	/*
	 | Since CVApi is built with the help from CUrl Library, users can redirect the request at another route.
	 | In order to use CVApi, users should not change this setting.
	*/
	 "route" => "http://52ea30ac.ngrok.io/api/request",

	 /*
	 | Since CVApi is built with the help from CUrl Library, users can redirect the request at another route.
	 | In order to use CVApi, users should not change this setting.
	*/

	 "test" => "http://52ea30ac.ngrok.io/api/testApp",

	/*
	 | isPost sets the method type to POST when using CUrl. If users change the route and start using GET
	 | requests, the can set isPost to false. Otherwise, it should be left as true
	*/
	"isPost" => true,

	/*
	 | Path is used to set the place where the user wants to save the images.
	*/
	"path" => realpath('') . '/'
];