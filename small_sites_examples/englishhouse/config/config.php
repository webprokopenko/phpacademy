<?php

Config::set('site_name', 'Your Site Name');

Config::set('languages', array('en', 'fr'));

// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'englishhouse');
Config::set('db.password', 'englishhouse');
Config::set('db.db_name', 'englishhouse');

Config::set('salt', 'jd7sj3sdkd964he7e');