<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

if (!class_exists('PhpCsFixer\Finder')) {
    exit;
}

$finder = (new Finder())
    ->append([__FILE__])
    ->in(__DIR__.DIRECTORY_SEPARATOR.'src')
;

return (new Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'echo_tag_syntax' => ['format' => 'short'],
        'ordered_class_elements' => ['sort_algorithm' => 'alpha'],
    ])
    ->setFinder($finder)
;
