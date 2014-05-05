<?php

$extensionUtility = new \HDNET\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('HDNET\\Profession\\Domain\\Model\\Type');

$custom = array();

$custom = array(
    'ctrl' => array(
        'default_sortby' => ' ORDER BY title DESC'
    ),
    'columns' => array(
        'description' => array(
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
                'wizards' => array(
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
    ),
);

return \HDNET\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);