<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

(static function (): void {
    $pluginKey = ExtensionUtility::registerPlugin(
    // extension name, matching the PHP namespaces (but without the vendor)
        'Sitepackage',
        // arbitrary, but unique plugin name (not visible in the backend)
        'PersonPlugin',
        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
        'Person Extbase Example',
    );
})();
