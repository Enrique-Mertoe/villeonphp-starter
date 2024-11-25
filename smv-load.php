<?php

use Villeon\Application;
use Villeon\Core\Facade\Config;

require "vendor/autoload.php";
require "smv-config.php";

$app = new Application();
$app->withConfig(function () {
    Config::set_src(SRC);
})->create();