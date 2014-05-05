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
	 * category
	 *
	 * @var string
	 */
	protected $category;

	/**
	 * city
	 *
	 * @var string
	 */
	protected $city;

	/**
	 * circumcircle
	 *
	 * @var string
	 */
	protected $circumcircle;

	/**
	 * zipcode
	 *
	 * @var integer
	 */
	protected $zipcode;

	/**
	 * @param string $category
	 */
	public function setCategory($category) {
		$this->category = $category;
	}

	/**
	 * @return string
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * @param string $circumcircle
	 */
	public function setCircumcircle($circumcircle) {
		$this->circumcircle = $circumcircle;
	}

	/**
	 * @return string
	 */
	public function getCircumcircle() {
		return $this->circumcircle;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param int $zipcode
	 */
	public function setZipcode($zipcode) {
		$this->zipcode = $zipcode;
	}

	/**
	 * @return int
	 */
	public function getZipcode() {
		return $this->zipcode;
	}

}