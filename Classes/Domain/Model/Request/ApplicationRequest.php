<?php
/**
 * ApplicationRequest Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model\Request;

/**
 * ApplicationRequest
 *
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class ApplicationRequest extends \TYPO3\Hdnet\Domain\Model\AbstractModel{

	/**
	 * firstname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $firstname;

	/**
	 * lastname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $lastname;

	/**
	 * street
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $street;

	/**
	 * streetNumber
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $streetNumber;

	/**
	 * zip
	 *
	 * @var integer
	 */
	protected $zip;

	/**
	 * city
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $city;

	/**
	 * country
	 * TODO Country-Datenbank einbinden!!!
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $country;

	/**
	 * phone
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $phone;

	/**
	 * email
	 *
	 * @var string
	 * @validate NotEmpty
	 * @validate EmailAddress
	 */
	protected $email;

	/**
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $firstname
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * @return string
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * @param string $lastname
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * @return string
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * @param string $phone
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * @return string
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * @param string $street
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * @return string
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * @param string $streetNumber
	 */
	public function setStreetNumber($streetNumber) {
		$this->streetNumber = $streetNumber;
	}

	/**
	 * @return string
	 */
	public function getStreetNumber() {
		return $this->streetNumber;
	}

	/**
	 * @param int $zip
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * @return int
	 */
	public function getZip() {
		return $this->zip;
	}




}