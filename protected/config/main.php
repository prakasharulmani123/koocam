<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'KOOCAM',
    // preloading 'log' component
//    'preload' => array('log', 'booster'), //Hide by Nadesh at 2015-11-14, Removed 'booster' (Header, Sidebar not working)
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        'admin',
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'koocamgii',
            'generatorPaths' => array('application.gii'),
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'site'
    ),
    // application components
    'components' => array(
        'clientScript' => array(
            'packages' => array(
                'jquery' => array(
                    'baseUrl' => '//code.jquery.com/',
//                    'baseUrl' => 'http://localhost/wipocos_1/branches/dev/',
                    'js' => array('jquery-1.11.3.min.js', 'jquery-migrate-1.2.1.min.js'),
                ),
            )
        ),
        'booster' => array(
            'class' => 'application.extensions.yiibooster.components.Booster',
            'yiiCss' => false
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => require(dirname(__FILE__) . '/urlManager.php'),
        ),
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
        'user' => array(
            'allowAutoLogin' => true,
        ),
        'request' => array(
            'enableCsrfValidation' => false,
        ),
    ),
    // application-level parameters that can be accessed
    //setting the basic language value
    'defaultController' => 'site/default/index',
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
//    'theme' => 'learning',
    'sourceLanguage' => 'en_us',
    'language' => 'en_US',
);
