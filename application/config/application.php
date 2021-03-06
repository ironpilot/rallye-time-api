<?php
return [
	'application'	=> [
		'public_location'		=>	'/',
		'loader'			=>	'', //Default value is blank. Used to specify your own autoloader.
		'throw_on_loader_failure'	=>	true,	//Throws an Exception if the autoloader cannot find a class.
	],

	'page'	=>	[
		'header' 	=>	'', //Deprecated - MODULES_ROOT'header.php'
		'footer' 	=>	'', //Deprecated - MODULES_ROOT'footer.php'
		'title' 	=>	'STAPLE Code - A PHP 5 Model-View-Controller Framework for Rapid Application Development',
	],

	'session'	=>	[
		//automatically create a session on every call to the framework.
		'auto_create' 		=> 1,
		'max_lifetime' 		=> 1440,


		//Database Session Handler
		//'handler' => 'Staple\Session\DatabaseHandler',
		//'connection' 		=> '',            //if none specified, the default database connection is used.
		//'table' 			=> 'sessions',
		//'encrypt_key' 	=> '',

		//File Session Handler
		'handler' 			=> 'Staple\Session\FileHandler',
		//file_location => ''

		//Redis Session Handler
		//'handler' 			=> 'Staple\Session\RedisHandler',
		//'scheme' 			=> 'tcp',
		//'host' 				=> 'localhost',
		//'port' 				=> '6379',
		//'cafile'			=> '',
		//'password' 			=> '',
		//'encrypt_key' 		=> '',
		//'prefix' 			=> 'session:',
	],

	'layout' => [
		'default' => 'bootstrap',
		'scripts' => [
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
		],
		'styles' => [
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			'https://netdna.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css',
		],
		'meta_keywords' => '',
		'meta_description' => '',
	],

	'forms'	=> [
		//'elementViewAdapter' => 'FormBootstrapViewAdapter',
		//'elementViewAdapter' => 'FormFoundationViewAdapter',
	],

	'db' => [
		//'dsn' 		=> '',   //Use this option to create a custom DSN for your database connection
		'driver' 		=> 'mysql',    //specify the database connection type
		'host' 			=> 'localhost',
		'username' 		=> '',
		'password' 		=> '',
		'db' 			=> 'staple',
		//'schema'		=> '',		//For SQL Server you can specify a default schema here.
		//options 		=> [],     //Specify any additional options here
	],

	'auth' => [
		'enabled' 			=> 0,
		'adapter' 			=> 'DBAuthAdapter',
		'controller' 		=> 'accountController',
		'authtable' 		=> 'accounts',
		'uidfield' 			=> 'username',
		'pwfield' 			=> 'password',
		'rolefield' 		=> 'accountType',
		'pwenctype' 		=> 'SHA1',
		'allowedRoute' 		=> [
			'index/index'
		],
		//'ADDefaultPrivs' => '10',
	],

	'encrypt' => [
		'AES_Key' => '',
		'AES_IV' => '',
	],

	'email' => [
		'html' 		=> 1,
		'from' 		=> 'no-reply@staplecode.org',
		'bcc' 		=> '',
		'server' 	=> '',
		'template' 	=> MODULES_ROOT.'email/template.html',
	],

	'errors' => [
		'devmode' 		=> 1,
		'enable_timer' 	=> 0,
	],

	/*'ActiveDirectory' => [
		'host' 			=> '',
		'domain' 		=> '',
		'baseDN' 		=> '',
		'LDAPSenabled' 	=> '',
		'username' 		=> '',
		'password' 		=> '',
	],*/
];