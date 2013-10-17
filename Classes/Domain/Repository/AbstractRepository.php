<?php
/**
 * AbstractRepository
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Repository;


/**
 * AbstractRepository
 *
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class AbstractRepository extends \TYPO3\Hdnet\Domain\Repository\AbstractRepository {

	/**
	 * Get a clean query
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
	 */
	public function createCleanQuery() {
		$query = parent::createQuery();
		$query
			->getQuerySettings()
			->setRespectStoragePage(FALSE);
		return $query;
	}

	/**
	 *  Fulltext search in selected properties
	 *
	 * @param array  $properties
	 * @param string $searchWord
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findBySearchWord($properties, $searchWord) {
		$query = $this->createQuery();
		$constraints = array();
		foreach ($properties as $property) {
			$constraints[] = $query->like($property, '%' . $this->escapeLikeQuery($searchWord) . '%', FALSE);
		}
		$query->matching($query->logicalOr($constraints));
		return $query->execute();
	}

	/**
	 * Replace the like query wildcards for a clean database selection
	 *
	 * @param string $propertyWithoutWildcard
	 *
	 * @return string
	 */
	protected function escapeLikeQuery($propertyWithoutWildcard) {
		return str_replace(array(
		                        '%',
		                        '_'
		                   ), array(
		                           '\\%',
		                           '\\_'
		                      ), $propertyWithoutWildcard);
	}

}