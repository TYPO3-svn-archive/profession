<?php

$extensionUtility = new \HDNET\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('HDNET\\Profession\\Domain\\Model\\AddressBase');

$custom = array(
	'ctrl'    => array(
		'typeicon_column' => 'record_type',
		'typeicons'       => array(
			\HDNET\Profession\Domain\Model\Company::RECORD_TYPE       => TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('profession') . 'Resources/Public/Icons/company.png',
			\HDNET\Profession\Domain\Model\ContactPerson::RECORD_TYPE => TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('profession') . 'Resources/Public/Icons/contact.png',
		),
		'type'            => 'record_type',
		'label'           => 'last_name',
		'label_alt'       => 'company, country',
		'thumbnail'       => FALSE,
		'requestUpdate'   => 'country,' . $base['ctrl']['requestUpdate'],
	),
	'columns' => array(
		'image'            => array(
			'config' => array(
				'show_thumbs' => 0,
			)

		),
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
						\HDNET\Profession\Domain\Model\Company::RECORD_TYPE
					),
					array(
						'ContactPerson',
						\HDNET\Profession\Domain\Model\ContactPerson::RECORD_TYPE
					),
				)
			)
		),
	),
	'types'   => array(
		'0'                                                       => array(
			'showitem'             => 'record_type,' . $base['types'][1]['showitem'] . ',image,privacy, newsletter',
			'subtype_value_field'  => 'record_type',
			'subtypes_excludelist' => array(
				'0' => 'module_sys_dmail_html'
			)
		),
		\HDNET\Profession\Domain\Model\Company::RECORD_TYPE       => array(
			'showitem'             => 'record_type, hidden, company, address,--palette--;;,zip,city,--palette--;;3,--palette--;GeoLocation;geo, phone;;4,email;;5,image',
			'subtype_value_field'  => 'record_type',
			'subtypes_excludelist' => array(
				'1' => 'module_sys_dmail_html'
			)
		),
		\HDNET\Profession\Domain\Model\ContactPerson::RECORD_TYPE => array(
			'showitem'             => 'record_type, hidden, first_name, last_name, employee_company, address,--palette--;;,zip,city, --palette--;;3,--palette--;GeoLocation;geo, phone;;4,email;;5,image',
			'subtype_value_field'  => 'record_type',
			'subtypes_excludelist' => array(
				'2' => 'module_sys_dmail_html'
			)
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $custom['column'], TRUE);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_address', 'geoCoordinates', 'latitude,longitude');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', '--palette--;LLL:EXT:hdnet/Resources/Private/Language/locallang.xml:address.geoCoordinates;geoCoordinates');


return \HDNET\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);