<?php
/**
 * Local configuration
 *
 * @category   Extension
 * @package    Profession
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
/** @var string $_EXTKEY */
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/** @var $autoLoader \HDNET\Hdnet\Service\AutoLoaderService */
$autoLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('HDNET\\Hdnet\\Service\\AutoLoaderService', 'profession');
$autoLoader->loadExtensionConfiguration();

// Configure plugins
$plugins = array(
	'Profession' => array(
		array('Profession' => 'index,detail,search,filter,application,thanks,mail'),
		array('Profession' => 'index,detail,search,filter,application,thanks,mail')
	)
);

foreach ($plugins as $name => $configuration) {
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('HDNET.' . $_EXTKEY, $name, $configuration[0], $configuration[1]);
}
unset($plugins);


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