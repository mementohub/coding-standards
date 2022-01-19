<?php

require 'vendor/autoload.php';

use MementoHub\CodingStandards\ConfigFactory;
use PhpCsFixer\Finder;

return ConfigFactory::make(
    Finder::create()
        ->in([
            __DIR__ . '/app',
            __DIR__ . '/config',
            __DIR__ . '/database',
            __DIR__ . '/routes',
            __DIR__ . '/tests',
        ])
);
