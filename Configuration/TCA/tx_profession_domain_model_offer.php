<?php

$extensionUtility = new \HDNET\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('HDNET\\Profession\\Domain\\Model\\Offer');

$custom = array();

$custom = array(
	'ctrl'    => array(
		'default_sortby' => ' ORDER BY title DESC'
	),
	'columns' => array(
		'contact_person'    => array(
			'l10n_mode' => 'exclude',
			'exclude'   => 0,
			'config'    => array(
				'type'          => 'select',
				'items'         => array(
					array(
						'',
						0
					),
				),
				'foreign_table' => 'tt_address',
				'foreign_table_where' => 'AND record_type = 2',
				'size'          => 1,
				'minitems'      => 1,
				'maxitems'      => 1,
			)
		),
		'location'          => array(
			'l10n_mode' => 'exclude',
			'exclude'   => 0,
			'config'    => array(
				'type'          => 'select',
				'items'         => array(
					array(
						'',
						0
					),
				),
				'foreign_table' => 'tt_address',
				'foreign_table_where' => 'AND record_type = 1',
				'size'          => 1,
				'minitems'      => 1,
				'maxitems'      => 1,
			)
		),
		'type'              => array(
			'l10n_mode' => 'exclude',
			'exclude'   => 0,
			'config'    => array(
				'type'          => 'select',
				'items'         => array(
					array(
						'',
						0
					),
				),
				'foreign_table' => 'tx_profession_domain_model_type',
				'size'          => 1,
				'minitems'      => 1,
				'maxitems'      => 1,
			)
		),
		'job_challenge'     => array(
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array (
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'applicant_profile' => array(
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array (
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'what_we_offer'     => array(
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
				'wizards' => array (
					'_PADDING' => 2,
					'RTE' => array(
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'type' => 'script',
						'title' => 'RTE',
						'icon' => 'wizard_rte2.gif',
						'script' => 'wizard_rte.php',
					),
				),
			),
		),
		'availability_now'  => array(
			'config' => array(
				'type' => 'check'
			)
		),
	)
);

return \HDNET\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);