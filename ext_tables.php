<?php
/**
 * Table configuration
 *
 * @category   Extension
 * @package    Profession
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use HDNET\Hdnet\Service\PluginWizardService;


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

/** @var $autoLoader \HDNET\Hdnet\Service\AutoLoaderService */
$autoLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('HDNET\\Hdnet\\Service\\AutoLoaderService', 'profession');
$autoLoader->loadExtensionTables(array(
	'CommandController',
	'StaticTyposcript',
	'FlexForms',
	'ContentObjects',
    'SmartObjects',
));


// Register Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'Profession', 'Profession Portal');

// Register Plugin
$plugins = array('Profession');


foreach ($plugins as $plugin) {
	$label = 'LLL:EXT:profession/Resources/Private/Language/locallang.xml:plugin.' . lcfirst($plugin);
	$description = 'LLL:EXT:profession/Resources/Private/Language/locallang.xml:plugin.' . lcfirst($plugin) . '.description';
	ExtensionUtility::registerPlugin($_EXTKEY, $plugin, $label, ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/career.png');
	PluginWizardService::register($label, $description, 'profession_' . strtolower($plugin), ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/career.png');
}


$ttAddress = array(
	'longitude'        => array(
		'exclude' => 0,
		'label'   => 'LLL:EXT:hdnet/Resources/Private/Language/locallang.xml:address.longitude',
		'config'  => array(
			'size' => 17,
			'type' => 'input',
		)
	),
	'latitude'         => array(
		'exclude' => 0,
		'label'   => 'LLL:EXT:hdnet/Resources/Private/Language/locallang.xml:address.latitude',
		'config'  => array(
			'size' => 18,
			'type' => 'input',
		)
	),

	'employee_company' => array(
		'l10n_mode' => 'exclude',
		'exclude'   => 0,
		'label'     => 'Select Company',
		'config'    => array(
			'type'                => 'select',
			'items'               => array(
				array(
					'',
					0
				),
			),
			'foreign_table'       => 'tt_address',
			'foreign_table_where' => 'AND record_type = 1',
			'size'                => 1,
			'minitems'            => 0,
			'maxitems'            => 1,
		)
	),

	'record_type'      => array(
		'l10n_mode' => 'exclude',
		'exclude'   => 0,
		'label'     => 'LLL:EXT:profession/Resources/Private/Language/locallang_db.xml:tt_address.record_type',
		'config'    => array(
			'type'  => 'select',
			'items' => array(
				array(
					'Default',
					0
				),
				array(
					'Company',
					\TYPO3\Profession\Domain\Model\Company::RECORD_TYPE
				),
				array(
					'ContactPerson',
					\TYPO3\Profession\Domain\Model\ContactPerson::RECORD_TYPE
				),
			)
		)
	),
);

$TCA['tt_address']['types'] = array(
	'0'                                                       => array(
		'showitem'             => 'record_type,' . $TCA['tt_address']['types'][1]['showitem'] . ',image,privacy, newsletter',
		'subtype_value_field'  => 'record_type',
		'subtypes_excludelist' => array(
			'0' => 'module_sys_dmail_html'
		)
	),
	\TYPO3\Profession\Domain\Model\Company::RECORD_TYPE       => array(
		'showitem'             => 'record_type, hidden, company, address,--palette--;;,zip,city,--palette--;;3,--palette--;GeoLocation;geo, phone;;4,email;;5,image',
		'subtype_value_field'  => 'record_type',
		'subtypes_excludelist' => array(
			'1' => 'module_sys_dmail_html'
		)
	),
	\TYPO3\Profession\Domain\Model\ContactPerson::RECORD_TYPE => array(
		'showitem'             => 'record_type, hidden, first_name, last_name, employee_company, address,--palette--;;,zip,city, --palette--;;3,--palette--;GeoLocation;geo, phone;;4,email;;5,image',
		'subtype_value_field'  => 'record_type',
		'subtypes_excludelist' => array(
			'2' => 'module_sys_dmail_html'
		)
	),
);

// RecordType Icons
$TCA['tt_address']['ctrl']['typeicon_column'] = 'record_type';
$TCA['tt_address']['ctrl']['typeicons'] = array(
	\TYPO3\Profession\Domain\Model\Company::RECORD_TYPE       => ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/company.png',
	\TYPO3\Profession\Domain\Model\ContactPerson::RECORD_TYPE => ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/contact.png',
);


// Use record_type
$TCA['tt_address']['ctrl']['type'] = 'record_type';
$TCA['tt_address']['ctrl']['label'] = 'last_name';
$TCA['tt_address']['ctrl']['label_alt'] = 'company, country';
$TCA['tt_address']['ctrl']['thumbnail'] = FALSE;
$TCA['tt_address']['ctrl']['requestUpdate'] = 'country,' . $TCA['tt_address']['ctrl']['requestUpdate'];
$TCA['tt_address']['columns']['image']['config']['show_thumbs'] = 0;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $ttAddress, TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_address', 'geoCoordinates', 'latitude,longitude');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', '--palette--;LLL:EXT:hdnet/Resources/Private/Language/locallang.xml:address.geoCoordinates;geoCoordinates');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin($_EXTKEY, 'AddressFinder', 'HDNET: AddressFinder');
