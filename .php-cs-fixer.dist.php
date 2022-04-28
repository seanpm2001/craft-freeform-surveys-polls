<?php
/*
 * Freeform Surveys & Polls plugin for Craft CMS 3.x
 *
 * @link      https://solspace.com
 * @copyright Copyright (c) 2022 Solspace
 */

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/packages/plugin');

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP80Migration' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PhpCsFixer' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_nested_dirname' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'protected_to_private' => false,
        'single_trait_insert_per_statement' => true,
        'ternary_to_null_coalescing' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
