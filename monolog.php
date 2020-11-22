<?php

require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger("logger-app");
$log->pushHandler(new StreamHandler("new.log",Logger::WARNING));

