<?php

use App\Models\{Router, Request};

require 'vendor/autoload.php';
require('core/bootstrap.php');

Router::load('app/routes/index.php')
    ->direct(
        Request::uri(),
        Request::method()
    );
