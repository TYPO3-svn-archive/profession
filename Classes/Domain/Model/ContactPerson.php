<?php

/**
 * ContactPerson Address Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model;

use HDNET\Hdnet\Domain\Model\Address;

/**
 * ContactPerson Address Model
 *
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db tt_address
 */
class ContactPerson extends Address {

	/**
	 * RecordType 2
	 */
	const RECORD_TYPE = 2;

	/**
	 * @var \TYPO3\Profession\Domain\Model\Company
	 * @db text
	 */
	protected $employeeCompany;

	/**
	 * @param \TYPO3\Profession\Domain\Model\Company $employeeCompany
	 */
	public function setEmployeeCompany($employeeCompany) {
		$this->employeeCompany = $employeeCompany;
	}

	/**
	 * @return \TYPO3\Profession\Domain\Model\Company
	 */
	public function getEmployeeCompany() {
		return $this->company;
	}

}