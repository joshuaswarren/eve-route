<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
require_once('dbconfig.php');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Eve Route',
	'preload'=>array('log'),	
	'modules'=>array(
            'user'=>array(
                # encrypting method (php hash function)
                'hash' => 'md5',
                'sendActivationMail' => true,
                'loginNotActiv' => false,
                'activeAfterRegister' => false,
                'autoLogin' => true,
                'registrationUrl' => array('/user/registration'),
                'recoveryUrl' => array('/user/recovery'),
                'loginUrl' => array('/user/login'),
                'returnUrl' => array('/user/profile'),
                'returnLogoutUrl' => array('/user/login'),
            ),	
	),
	'components'=>array(
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		'db'=> require 'dbconfig.php',			
		'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
			),
	),
);