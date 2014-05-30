<?php
/**
 * Offer Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Doamin/Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;

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
	 * Title
	 *
	 * @var string
	 * @db
	 */
	protected $title;

	/**
	 * SubTitle
	 *
	 * @var string
	 * @db
	 */
	protected $subTitle;

	/**
	 * Description
	 *
	 * @var string
	 * @db
	 */
	protected $description;

	/**
	 * JobChallenge
	 *
	 * @var string
	 * @db
	 */
	protected $jobChallenge;

	/**
	 * ApplicantProfile
	 *
	 * @var string
	 * @db
	 */
	protected $applicantProfile;

	/**
	 * WhatWeOffer
	 *
	 * @var string
	 * @db
	 */
	protected $whatWeOffer;

	/**
	 * Start date
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
	 * Contact person
	 *
	 * @var \HDNET\Hdnet\Domain\Model\Address
	 * @db int(11) DEFAULT NULL
	 */
	protected $contactPerson;

	/**
	 * Location
	 *
	 * @var \HDNET\Hdnet\Domain\Model\Address
	 * @db int(11) DEFAULT NULL
	 */
	protected $location;

	/**
	 * Type
	 *
	 * @var \HDNET\Profession\Domain\Model\Type
	 * @db text
	 */
	protected $type;

	/**
	 * Data
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @db
	 */
	protected $data;

	/**
	 * Set applicant profile
	 *
	 * @param string $applicantProfile
	 */
	public function setApplicantProfile($applicantProfile) {
		$this->applicantProfile = $applicantProfile;
	}

	/**
	 * Get applicant profile
	 *
	 * @return string
	 */
	public function getApplicantProfile() {
		return $this->applicantProfile;
	}

	/**
	 * Set availability
	 *
	 * @param boolean $availabilityNow
	 */
	public function setAvailabilityNow($availabilityNow) {
		$this->availabilityNow = $availabilityNow;
	}

	/**
	 * Get availability
	 *
	 * @return boolean
	 */
	public function getAvailabilityNow() {
		return $this->availabilityNow;
	}

	/**
	 * Set contact person
	 *
	 * @param \HDNET\Hdnet\Domain\Model\Address $contactPerson
	 */
	public function setContactPerson($contactPerson) {
		$this->contactPerson = $contactPerson;
	}

	/**
	 * Get contact person
	 *
	 * @return \HDNET\Hdnet\Domain\Model\Address
	 */
	public function getContactPerson() {
		return $this->contactPerson;
	}

	/**
	 * Set Data
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $data
	 */
	public function setData($data) {
		$this->data = $data;
	}

	/**
	 * Get data
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Set job challenge
	 *
	 * @param string $jobChallenge
	 */
	public function setJobChallenge($jobChallenge) {
		$this->jobChallenge = $jobChallenge;
	}

	/**
	 * Get job challenge
	 *
	 * @return string
	 */
	public function getJobChallenge() {
		return $this->jobChallenge;
	}

	/**
	 * Set location
	 *
	 * @param \HDNET\Hdnet\Domain\Model\Address $location
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Get location
	 *
	 * @return \HDNET\Hdnet\Domain\Model\Address
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Set startdate
	 *
	 * @param \DateTime $startDate
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Get startdate
	 *
	 * @return \DateTime
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set type
	 *
	 * @param \HDNET\Profession\Domain\Model\Type $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get type
	 *
	 * @return \HDNET\Profession\Domain\Model\Type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set what we offer
	 *
	 * @param string $whatWeOffer
	 */
	public function setWhatWeOffer($whatWeOffer) {
		$this->whatWeOffer = $whatWeOffer;
	}

	/**
	 * Get what we offer
	 *
	 * @return string
	 */
	public function getWhatWeOffer() {
		return $this->whatWeOffer;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set subtitle
	 *
	 * @param string $subTitle
	 */
	public function setSubTitle($subTitle) {
		$this->subTitle = $subTitle;
	}

	/**
	 * Get subtitle
	 *
	 * @return string
	 */
	public function getSubTitle() {
		return $this->subTitle;
	}

}