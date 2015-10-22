<?php

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/pimcore/config/startup.php";

try {
    Pimcore::run();
} catch (Exception $e) {
    if (class_exists("Logger")) {
        Logger::emerg($e);
    }

    throw $e;
}
