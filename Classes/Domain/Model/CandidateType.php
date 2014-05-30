<?php
/**
 * CandidateType Model
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Doamin/Model
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;
use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * CandidateType
 *
 * @package    Profession
 * @subpackage Domain/Moden
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 * @db
 */
class CandidateType extends AbstractModel {

	/**
	 * title
	 *
	 * @var string
	 * @db
	 */
	protected $title;

	/**
	 * description
	 *
	 * @var string
	 * @db
	 */
	protected $description;

	/**
	 * JobTypes
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HDNET\Profession\Domain\Model\Type>
	 * @db text
	 */
	protected $jobTypes;

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @db
	 */
	protected $image;



	/**
	 * Set image
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $image
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Get image
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Set jobTypes
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $jobTypes
	 */
	public function setJobTypes($jobTypes) {
		$this->jobTypes = $jobTypes;
	}

	/**
	 * Get jobTypes
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getJobTypes() {
		return $this->jobTypes;
	}


	/**
	 * Set title
	 *
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
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