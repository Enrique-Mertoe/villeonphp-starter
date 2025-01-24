<?php

use Villeon\App;
use Villeon\Application;
use Villeon\Core\Facade\Config;

require "vendor/autoload.php";
require "config.php";
Application::new(__DIR__)->start();
