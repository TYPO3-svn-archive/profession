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

use TYPO3\Hdnet\Service\GeoService;


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

	/**
	 *
	 */
	public function findByAddress($address, $distance) {
		$geoService = new GeoService();

		// try catch
		$coordinates = $geoService->getCoordinates($address);
		// catch

		// fehlerfall prüfen und leeres ergebnis zurückliefern


		return $this->findByGeocentricAverage(array(
		                                           'lng' => 123213,
		                                           'lat' => 123123
		                                      ), array(
		                                              'lng' => 'longitude',
		                                              'lat' => 'latitude'
		                                         ), 9, $distance);
	}

}