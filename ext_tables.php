<?php
/**
 * Table configuration
 *
 * @category   Extension
 * @package    Profession
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

/** @var string $_EXTKEY */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Initialize HDNET autoloader
\HDNET\Profession\Utility\ExtensionUtility::initializeExtensionTablesAutoLoader();
#\HDNET\Autoloader\Loader::extTables('HDNET', 'profession');

// Register plugins
\HDNET\Profession\Utility\ExtensionUtility::registerPlugins($_EXTKEY, array(
	'Profession'   => 'Profession Portal',
));


#foreach ($plugins as $plugin) {
#	$label = 'LLL:EXT:profession/Resources/Private/Language/locallang.xml:plugin.' . lcfirst($plugin);
#	$description = 'LLL:EXT:profession/Resources/Private/Language/locallang.xml:plugin.' . lcfirst($plugin) . '.description';
#	ExtensionUtility::registerPlugin($_EXTKEY, $plugin, $label, ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/career.png');
#	PluginWizardService::register($label, $description, 'profession_' . strtolower($plugin), ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/career.png');
#}


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'AddressFinder', 'HDNET: AddressFinder');

\HDNET\Hdnet\Utility\ExtensionUtility::reloadTcaInformationForLateBindingInExtTables('profession', 'tt_address');

