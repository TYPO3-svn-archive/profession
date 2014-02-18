<?php
/**
 * Offer Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Doamin/Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model;

use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * Offer
 *
 * @package    Profession
 * @subpackage Domain/Moden
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db
 */


class Offer extends AbstractModel {
	/**
	 * title
	 *
	 * @var string
	 * @db
	 */
	protected $title;

	/**
	 * jobChallenge
	 *
	 * @var string
	 * @db
	 */
	protected $jobChallenge;

	/**
	 * applicantProfile
	 *
	 * @var string
	 * @db
	 */
	protected $applicantProfile;

	/**
	 * whatWeOffer
	 *
	 * @var string
	 * @db
	 */
	protected $whatWeOffer;

	/**
	 * start date
	 *
	 * @var \DateTime
	 * @db
	 */
	protected $startDate;

	/**
	 * Availability
	 *
	 * @var bool
	 * @db
	 */
	protected $availabilityNow;

	/**
	 * @var \TYPO3\Hdnet\Domain\Model\Address
	 * @db int(11) DEFAULT NULL
	 */
	protected $contactPerson;

	/**
	 * @var \TYPO3\Hdnet\Domain\Model\Address
	 * @db int(11) DEFAULT NULL
	 */
	protected $location;

	/**
	 * @var \TYPO3\Profession\Domain\Model\Type
	 * @db int(11) DEFAULT NULL
	 */
	protected $type;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @db
	 */
	protected $data;

	/**
	 * @param string $applicantProfile
	 */
	public function setApplicantProfile($applicantProfile) {
		$this->applicantProfile = $applicantProfile;
	}

	/**
	 * @return string
	 */
	public function getApplicantProfile() {
		return $this->applicantProfile;
	}

	/**
	 * @param boolean $availabilityNow
	 */
	public function setAvailabilityNow($availabilityNow) {
		$this->availabilityNow = $availabilityNow;
	}

	/**
	 * @return boolean
	 */
	public function getAvailabilityNow() {
		return $this->availabilityNow;
	}

	/**
	 * @param \TYPO3\Hdnet\Domain\Model\Address $contactPerson
	 */
	public function setContactPerson($contactPerson) {
		$this->contactPerson = $contactPerson;
	}

	/**
	 * @return \TYPO3\Hdnet\Domain\Model\Address
	 */
	public function getContactPerson() {
		return $this->contactPerson;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $data
	 */
	public function setData($data) {
		$this->data = $data;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @param string $jobChallenge
	 */
	public function setJobChallenge($jobChallenge) {
		$this->jobChallenge = $jobChallenge;
	}

	/**
	 * @return string
	 */
	public function getJobChallenge() {
		return $this->jobChallenge;
	}

	/**
	 * @param \TYPO3\Hdnet\Domain\Model\Address $location
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * @return \TYPO3\Hdnet\Domain\Model\Address
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @param \DateTime $startDate
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * @return \DateTime
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param \TYPO3\Profession\Domain\Model\Type $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return \TYPO3\Profession\Domain\Model\Type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $whatWeOffer
	 */
	public function setWhatWeOffer($whatWeOffer) {
		$this->whatWeOffer = $whatWeOffer;
	}

	/**
	 * @return string
	 */
	public function getWhatWeOffer() {
		return $this->whatWeOffer;
	}



}