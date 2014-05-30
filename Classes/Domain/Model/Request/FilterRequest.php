<?php
/**
 * FilterRequest Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model\Request;
use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * FilterRequest
 *
 * @package    Profession
 * @subpackage Domain/Model/Request
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class FilterRequest extends AbstractModel{

	/**
	 * Category
	 *
	 * @var string
	 */
	protected $category;

	/**
	 * City
	 *
	 * @var string
	 */
	protected $city;

	/**
	 * Circumcircle
	 *
	 * @var string
	 */
	protected $circumcircle;

	/**
	 * Zipcode
	 *
	 * @var integer
	 */
	protected $zipcode;

	/**
	 * Set category
	 *
	 * @param string $category
	 */
	public function setCategory($category) {
		$this->category = $category;
	}

	/**
	 * Get category
	 *
	 * @return string
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Set circumcircle
	 *
	 * @param string $circumcircle
	 */
	public function setCircumcircle($circumcircle) {
		$this->circumcircle = $circumcircle;
	}

	/**
	 * Get circumcircle
	 *
	 * @return string
	 */
	public function getCircumcircle() {
		return $this->circumcircle;
	}

	/**
	 * Set city
	 *
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Get city
	 *
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Set zipcode
	 *
	 * @param int $zipcode
	 */
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
	}

	/**
	 * Get zipcode
	 *
	 * @return int
	 */
	public function getZipcode() {
		return $this->zipcode;
	}
}