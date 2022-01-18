<?php

use MementoHub\CodingStandards\ConfigFactory;
use PhpCsFixer\Finder;

return ConfigFactory::make(
    Finder::create()
        ->in([
            __DIR__ . '/config',
            __DIR__ . '/src',
            __DIR__ . '/stubs',
        ])
);
