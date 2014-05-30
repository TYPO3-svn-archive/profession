<?php

$extensionUtility = new \HDNET\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('HDNET\\Profession\\Domain\\Model\\CandidateType');

$custom = array();
$custom = array(
	'ctrl'    => array(
		'default_sortby' => ' ORDER BY type DESC'
	),
	'columns' => array(
		'title'       => array(
			'config' => array(
				'eval' => 'required'
			)
		),
		'description' => array(
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '5',
			)
		),
		'job_types'   => array(
			'config' => array(
				'type'           => 'select',
				'foreign_table'  => 'tx_profession_domain_model_type',
				'foreign_sortby' => 'sorting',
				'maxitems'       => 100,
				'minitems'       => 1,
				'size'           => 5

			)
		),

		'image'       => array(
			'config' => array(
				'maxitems' => 1,

			)
		)
	)
);

return \HDNET\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);