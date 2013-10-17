<?php
/**
 * Offer Repository
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Repository;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;


/**
 * OfferRepository
 *
 * @package    Profession
 * @subpackage Domain/Repository
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class OfferRepository extends AbstractRepository {

	/**
	 * @param \TYPO3\Profession\Domain\Model\Request\FilterRequest $filterRequest
	 *
	 * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
	 */
	public function findByRequest(\TYPO3\Profession\Domain\Model\Request\FilterRequest $filterRequest) {



			$query = $this->createQuery();
			$constraints = array();
			foreach ($filterRequest as $filterProperty) {
				DebuggerUtility::var_dump($filterProperty);
				#$constraints[] = $query->like($property, '%' . $this->escapeLikeQuery($searchWord) . '%', FALSE);
			}
			$query->matching($query->logicalOr($constraints));
			die();
			return $query->execute();


		return $this->findAll();
	}

	/**
	 * Get the distance between two points
	 *
	 * @param float $latitudeA
	 * @param float $longitudeA
	 * @param float $latitudeB
	 * @param float $longitudeB
	 *
	 * @return float
	 */
	public function getDistance($latitudeA, $longitudeA, $latitudeB, $longitudeB) {
		$EQUATORIAL_RADIUS_KM = 6378.137;

		$latA = $latitudeA / 180 * 3.14159265358979323;
		$lonA = $longitudeA / 180 * 3.14159265358979323;
		$latB = $latitudeB / 180 * 3.14159265358979323;
		$lonB = $longitudeB / 180 * 3.14159265358979323;
		return acos(sin($latA) * sin($latB) + cos($latA) * cos($latB) * cos($lonB - $lonA)) * $EQUATORIAL_RADIUS_KM;
	}


}