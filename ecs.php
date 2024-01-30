<?php

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
  ->withPaths([
      __DIR__ . '/src',
      __DIR__ . '/tests',
  ])
  ->withRules([
      NoUnusedImportsFixer::class,
  ])
  ->withRootFiles()
  ->withPreparedSets(
      psr12: true,
      arrays: true,
  );
