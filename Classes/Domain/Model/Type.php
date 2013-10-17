<?php
/**
 * JobTyp Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Doamin/Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Domain\Model;
/**
 * JobTyp
 *
 * @package    Profession
 * @subpackage Domain/Moden
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class Type extends \TYPO3\Hdnet\Domain\Model\AbstractModel {

	/**
	 * title
	 *
	 * @var string
	 * @db
	 */
	protected $type;

	/**
	 * description
	 *
	 * @var string
	 * @db
	 */
	protected $description;

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}



	/**
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
}