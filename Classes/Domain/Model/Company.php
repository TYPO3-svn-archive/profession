<?php

/**
 * Company Address Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model;

use TYPO3\Hdnet\Domain\Model\Address;

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
	 * @var string
	 */
	protected $gender;

	/**
	 * @var bool
	 */
	protected $privacy;

	/**
	 * @var string
	 */
	protected $firstName;

	/**
	 * @var string
	 */
	protected $lastName;

	/**
	 * @var string
	 */
	protected $email;

	/**
	 * @var string
	 */
	protected $phone;

	/**
	 * @var string
	 */
	protected $fax;

	/**
	 * category
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
	 * @db text
	 */
	protected $categories;

	/**
	 * @var string
	 * @db text
	 */
	protected $address;

	/**
	 * @var string
	 * @db text
	 */
	protected $address2;

	/**
	 * @var string
	 */
	protected $zip;

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
	 */
	public function setCategories($categories) {
		$this->categories = $categories;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Domain\Model\Category
	 */
	public function getCategory() {
		$this->categories->rewind();
		return $this->categories->current();
	}

}