<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 01.08.2016
 * Time: 10:21
 */
Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr'));

Config::set('routes',array(
    'default' => '',
    'admin' => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', '195.191.24.196');
Config::set('db.user', 'xgnbpama_mod4misha');
Config::set('db.password', 'kated3Fuj4epmod4');
Config::set('db.db_name', 'xgnbpama_mod4khvorostianenko');

Config::set('salt','rijeeh35sda766eue');
