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
	array('Profession' => 'index,detail,search,filter,application,sendApplication'),
	array('Profession' => 'index,detail,search,filter,application,sendApplication')
);


/** @var $autoLoader \TYPO3\Hdnet\Service\AutoLoaderService */
$autoLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\Hdnet\\Service\\AutoLoaderService', 'profession');
$autoLoader->loadExtensionConfiguration(array(
	'CommandController',
	'StaticTyposcript',
	'FlexForms',
	'ContentObjects',
));

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


/** CSS for Profession Extension -- ERCÜMENT TOPAL **/

#div.application form fieldset div {
#	height:40px;
#}