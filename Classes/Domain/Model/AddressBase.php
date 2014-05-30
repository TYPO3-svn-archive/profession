<?php

/**
 * AddressBase Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;
use HDNET\Hdnet\Domain\Model\Address;


/**
 * AddressBase Model
 * without validation
 *
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db         tt_address
 */
class AddressBase extends Address {

	/**
	 * RecordType
	 *
	 * @var int
	 */
	protected $recordType;

	/**
	 * Latitude
	 *
	 * @var float
	 * @db varchar(255) DEFAULT '' NOT NULL
	 */
	protected $latitude;

	/**
	 * Longitude
	 *
	 * @var float
	 * @db varchar(255) DEFAULT '' NOT NULL
	 */
	protected $longitude;

	/**
	 * Set latitude
	 *
	 * @param float $latitude
	 */
	public function setLatitude($latitude) {
		$this->latitude = $latitude;
	}

	/**
	 * Get latitude
	 *
	 * @return float
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Set longitude
	 *
	 * @param float $longitude
	 */
	public function setLongitude($longitude) {
		$this->longitude = $longitude;
	}

	/**
	 * Get longitude
	 *
	 * @return float
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * Set record type
	 *
	 * @param int $recordType
	 */
	public function setRecordType($recordType) {
		$this->recordType = $recordType;
	}

	/**
	 * Get record type
	 *
	 * @return int
	 */
	public function getRecordType() {
		return $this->recordType;
	}
}