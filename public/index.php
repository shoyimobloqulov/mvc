<?php

    require __DIR__ . '/../vendor/autoload.php';
    session_start();
    $app = new App();
    $app->debug(true);
    $app->error_reporting();
    $app->run();