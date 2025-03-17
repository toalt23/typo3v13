<?php

declare(strict_types=1);


use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'Sitepackage',
    // arbitrary, but unique plugin name (not visible in the backend)
    'PersonPlugin',
    // all actions
    [\Tobias\Sitepackage\Controller\PersonController::class => 'index'],
    // non-cacheable actions
    [\Tobias\Sitepackage\Controller\PersonController::class => 'index'],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);
