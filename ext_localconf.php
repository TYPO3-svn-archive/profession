<?php
/**
 * Local configuration
 *
 * @category   Extension
 * @package    Profession
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Profession',
	array('Profession' => 'index,detail,search,filter,application'),
	array('Profession' => 'index,detail,search,filter,application')
);


/** @var $autoLoader \TYPO3\Hdnet\Service\AutoLoaderService */
$autoLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\Hdnet\\Service\\AutoLoaderService', 'profession');
$autoLoader
	->loadExtensionLocalConfigurationCommandController()
	->loadExtensionLocalConfigurationHooks()
	->loadExtensionLocalConfigurationXclasses();

#if ($configuration->get('enable.functions.xingfield')) {
$ttAddress = array(
	'' => array(
		'label'     => 'LLL:EXT:website/Resources/Private/Language/locallang.xml:xing',
		'exclude'   => '0',
		'config'    => array(
			'type' => 'input',
			'size' => '20',
			'max' => '80',
			'eval' => '',
			'default' => '',
		),
	),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $ttAddress, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'xing');
#}
