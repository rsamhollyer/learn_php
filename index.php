<?php

require 'vendor/autoload.php';
require('core/bootstrap.php');
Router::load('routes/index.php')
    ->direct(
        Request::uri(),
        Request::method()
    );
