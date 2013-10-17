<?php
/**
 * $EM_CONF
 *
 * @category   Extension
 * @package    Profession
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */


$EM_CONF[$_EXTKEY] = array(
	'title'              => 'Profession',
	'description'        => 'HDNET Company extension (Career-Portal).',
	'category'           => 'misc',
	'shy'                => 0,
	'version'            => '6.1.0',
	'dependencies'       => 'extbase,fluid,static_info_tables,tt_address',
	'conflicts'          => '',
	'loadOrder'          => '',
	'module'             => '',
	'priority'           => '',
	'state'              => 'beta',
	'uploadfolder'       => 0,
	'createDirs'         => '',
	'modify_tables'      => '',
	'clearcacheonload'   => 0,
	'lockType'           => '',
	'author'             => 'Ercüment Topal',
	'author_email'       => 'ercuement.topal@hdnet.de',
	'author_company'     => 'hdnet.de',
	'CGLcompliance'      => '',
	'CGLcompliance_note' => '',
	'constraints'        => array(
		'depends'   => array(
			'extbase'            => '6.1.0-0.0.0',
			'fluid'              => '6.1.0-0.0.0',
			'typo3'              => '6.1.0-0.0.0',
			'static_info_tables' => '6.0.0-0.0.0',
		),
		'conflicts' => array(),
		'suggests'  => array(),
	),
	'suggests'           => array(),
);

?>