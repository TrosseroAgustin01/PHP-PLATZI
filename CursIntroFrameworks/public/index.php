<?php

require __DIR__ . '/../vendor/autoload.php';

#var_dump(__DIR__ . '/../vendor/autoload.php');
#$ php -S localhost:8000 -t public/
$request = new App\Http\Request;
$request->send();