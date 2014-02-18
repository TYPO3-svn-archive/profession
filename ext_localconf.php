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

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('TYPO3.' . $_EXTKEY, 'Profession',
	array('Profession' => 'index,detail,search,filter,application,thanks,mail'),
	array('Profession' => 'index,detail,search,filter,application,thanks,mail'))
;



/**
 * Base
 */
/* @var $configuration \HDNET\Hdnet\Configuration */
$configuration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('HDNET\\Hdnet\\Configuration');

$version = \TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(\TYPO3\CMS\Core\Utility\VersionNumberUtility::getNumericTypo3Version());

/** @var $autoLoader \HDNET\Hdnet\Service\AutoLoaderService */
$autoLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('HDNET\\Hdnet\\Service\\AutoLoaderService', 'hdnet');
$autoLoader->loadExtensionConfiguration(array(
    'CommandController',
    'StaticTyposcript',
    'FlexForms',
    'ContentObjects',
    'SmartObjects',
));


#if ($configuration->get('enable.functions.xingfield')) {
$ttAddress = array(
	'' => array(
		'label'   => 'LLL:EXT:website/Resources/Private/Language/locallang.xml:xing',
		'exclude' => '0',
		'config'  => array(
			'type'    => 'input',
			'size'    => '20',
			'max'     => '80',
			'eval'    => '',
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