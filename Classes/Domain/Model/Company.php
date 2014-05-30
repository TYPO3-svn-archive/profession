<?php

/**
 * Company Address Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;

use HDNET\Hdnet\Domain\Model\Address;

/**
 * Company Address Model
 *
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db         tt_address
 */
class Company extends Address {

	const RECORD_TYPE = 1;

	/**
	 * Gender
	 *
	 * @var string
	 */
	protected $gender;

	/**
	 * Privacy
	 *
	 * @var bool
	 */
	protected $privacy;

	/**
	 * Firstname
	 *
	 * @var string
	 */
	protected $firstName;

	/**
	 * Lastname
	 *
	 * @var string
	 */
	protected $lastName;

	/**
	 * Email
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * Phone
	 *
	 * @var string
	 */
	protected $phone;

	/**
	 * Fax
	 *
	 * @var string
	 */
	protected $fax;

	/**
	 * Categories
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 * @db text
	 */
	protected $categories;

	/**
	 * Address
	 *
	 * @var string
	 * @db text
	 */
	protected $address;

	/**
	 * Address2
	 *
	 * @var string
	 * @db text
	 */
	protected $address2;

	/**
	 * Zip
	 *
	 * @var string
	 */
	protected $zip;

	/**
	 * Set categories
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
	 */
	public function setCategories($categories) {
		$this->categories = $categories;
	}

	/**
	 * Get categories
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getCategories() {
		return $this->categories;
	}

}