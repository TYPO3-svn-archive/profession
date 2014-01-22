<?php

$extensionUtility = new \TYPO3\Hdnet\Service\ExtensionService();
$base = $extensionUtility->getTcaInformation('TYPO3\\Profession\\Domain\\Model\\Type');

$custom = array();

return \TYPO3\Hdnet\Utility\ArrayUtility::mergeRecursiveDistinct($base, $custom);