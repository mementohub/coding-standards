<?php

namespace MementoHub\CodingStandards;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class ConfigFactory
{
    public static function make(Finder $finder, array $rules = []): Config
    {
        $rules = array_merge(
            require __DIR__ . '/../config/rules.php',
            $rules
        );

        return (new Config())
            ->setFinder($finder)
            ->setRiskyAllowed(false)
            ->setRules($rules)
        ;
    }
}
