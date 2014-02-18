<?php

$extensionUtility = new \HDNET\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('TYPO3\\Profession\\Domain\\Model\\Type');

$custom = array();

return \HDNET\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);