<?php

declare(strict_types=1);

use Tobias\Sitepackage\Controller\PersonController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

ExtensionUtility::configurePlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'Sitepackage',
    // arbitrary, but unique plugin name (not visible in the backend)
    'PersonPlugin',
    // all actions
    [PersonController::class => 'new,index'],
    // non-cacheable actions
    [PersonController::class => 'new,index'],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);
