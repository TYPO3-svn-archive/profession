<?php

/**
 * AddressBase Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * AddressBase Model
 * without validation
 *
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db         tt_address
 */
class AddressBase extends \TYPO3\Hdnet\Domain\Model\Address {

	/**
	 * @var int
	 */
	protected $recordType;

	/**
	 * @var float
	 * @db varchar(255) DEFAULT '' NOT NULL
	 */
	protected $latitude;

	/**
	 * @var float
	 * @db varchar(255) DEFAULT '' NOT NULL
	 */
	protected $longitude;

	/**
	 * @param float $latitude
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * @return float
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * @param float $longitude
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * @return float
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * @param int $recordType
	 */
	public function setRecordType($recordType) {
		$this->recordType = $recordType;
	}

	/**
	 * @return int
	 */
	public function getRecordType() {
		return $this->recordType;
	}
}