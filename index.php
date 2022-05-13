<?php

require 'vendor/autoload.php';
require('core/bootstrap.php');
require Router::load('routes/index.php')
    ->direct(
        Request::uri(),
        Request::method()
    );
