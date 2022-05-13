<?php

$app = [];

$app['config'] = require 'config/config.php';

require('core/database/Connection.php');
require('core/database/QueryBuilder.php');
require('core/Models/Task.php');
require('core/Models/Router.php');
require('core/Models/Request.php');
require('core/functions/functions.php');



$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
