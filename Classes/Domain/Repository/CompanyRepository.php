<?php
/**
 * Conpany tt_Address
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Repository;


/**
 * Conpany tt_Address
 *
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class CompanyRepository extends AbstractRepository {

	/**
	 * Unset the respect storage PID feature
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
	 */
	public function createQuery() {
		return $this->createCleanQuery();
	}

}