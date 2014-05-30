<?php
/**
 * JobTyp Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Doamin/Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;
use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * JobTyp
 *
 * @package    Profession
 * @subpackage Domain/Moden
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db
 */
class Type extends AbstractModel {

	/**
	 * Type
	 *
	 * @var string
	 * @db
	 */
	protected $type;

	/**
	 * Description
	 *
	 * @var string
	 * @db
	 */
	protected $description;

	/**
	 * Set type
	 *
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
}