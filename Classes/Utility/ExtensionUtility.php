<?php
/**
 * ExtensionUtility.php
 *
 * General file information
 *
 * @category   Extension
 * @package    Profession
 * @author     Tim Spiekerkoetter HDNET GmbH & Co. <tim.spiekerkoetter@hdnet.de>
 */

namespace HDNET\Profession\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * ExtensionUtility
 *
 * General class information
 *
 * @package    Profession
 * @subpackage Utility
 * @author     Tim Spiekerkoetter HDNET GmbH & Co. <tim.spiekerkoetter@hdnet.de>
 */
class ExtensionUtility {

	/**
	 * Wrapper for plugins registry
	 *
	 * @param string $extkey
	 * @param array  $plugins
	 */
	public static function registerPlugins($extkey, array $plugins) {
		foreach ($plugins as $name => $label) {
			\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($extkey, $name, $label);
		}
	}

	/**
	 * Wrapper for reload TCA information for late binding in ext_tables
	 *
	 * @param string $extkey
	 * @param array  $tables
	 */
	public static function reloadTcaInformationForLateBindingInExtTables($extkey, array $tables) {
		foreach ($tables as $table) {
			\HDNET\Hdnet\Utility\ExtensionUtility::reloadTcaInformationForLateBindingInExtTables($extkey, $table);
		}
	}

	/**
	 * Initialize Auto loader for ext_tables
	 *
	 * @return void
	 */
	public static function initializeExtensionTablesAutoLoader() {
		/** @var $autoLoader \HDNET\Hdnet\Service\AutoLoaderService */
		$autoLoader = GeneralUtility::makeInstance('HDNET\\Hdnet\\Service\\AutoLoaderService', 'profession');
		$autoLoader->loadExtensionTables();
	}

	/**
	 * Add fields to the frontend root line generation
	 *
	 * @param array $fields
	 */
	public static function addRootLineFields(array $fields) {
		$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',' . implode(',', $fields);
	}

	/**
	 * Add fields to the page overlay feature
	 *
	 * @param array $fields
	 */
	public static function addPageOverlayFields(array $fields) {
		$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',' . implode(',', $fields);
	}


	/**
	 * Register smart objects
	 *
	 * @param array $classes
	 */
	public static function registerSmartObjects(array $classes) {
		foreach ($classes as $class) {
			\HDNET\Hdnet\Utility\ExtensionUtility::registerSmartObject($class);
		}
	}
}
