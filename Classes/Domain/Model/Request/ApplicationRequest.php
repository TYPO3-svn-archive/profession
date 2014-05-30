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
	 * Gender
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $gender;


	/**
	 * Firstname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $firstname;

	/**
	 * Lastname
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $lastname;

	/**
	 * Street
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $street;

	/**
	 * StreetNumber
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $streetNumber;

	/**
	 * Zip
	 *
	 * @var integer
	 */
	protected $zip;

	/**
	 * City
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $city;

	/**
	 * Country
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $country;

	/**
	 * Phone
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $phone;

	/**
	 * Email
	 *
	 * @var string
	 * @validate HDNET\Profession\Validation\Validator\MailValidator
	 */
	protected $email;

	/**
	 * Offer
	 *
	 * @var \HDNET\Profession\Domain\Model\Offer
	 */
	protected $offer;

	/**
	 * Message
	 *
	 * @var string
	 */
	protected $message;

	/**
	 * WriteTo
	 *
	 * @var string
	 */
	protected $writeTo;

	/**
	 * Curriculum vitae
	 *
	 * @var string
	 */
	protected $curriculumVitae;

	/**
	 * Credentials
	 *
	 * @var string
	 */
	protected $credentials;

	/**
	 * other
	 *
	 * @var string
	 */
	protected $other;

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