<?php
/**
 * ApplicationRequest Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model\Request;
use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * ApplicationRequest
 *
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class ApplicationRequest extends AbstractModel{

	/**
	 * gender
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $gender;


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
	 * @validate HDNET\Profession\Validation\Validator\MailValidator
	 */
	protected $email;

	/**
	 * offer
	 *
	 * @var \HDNET\Profession\Domain\Model\Offer
	 */
	protected $offer;

	/**
	 * @var string
	 */
	protected $message;

	/**
	 * @param string $gender
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * @return string
	 */
	public function getGender() {
		return $this->gender;
	}

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
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return string
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

	/**
	 * @param string $message
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

	/**
	 * @return string
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * @param \HDNET\Profession\Domain\Model\Offer $offer
	 */
	public function setOffer($offer) {
		$this->offer = $offer;
	}

	/**
	 * @return \HDNET\Profession\Domain\Model\Offer
	 */
	public function getOffer() {
		return $this->offer;
	}

}