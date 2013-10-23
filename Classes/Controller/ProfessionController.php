<?php
/**
 * Career Controller
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Controller
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Controller;

use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\Hdnet\Controller\AbstractController;
use TYPO3\Profession\Domain\Model\Offer;

/**
 * CareerController
 *
 * @package    Profession
 * @subpackage Controller
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class ProfessionController extends AbstractController {

	/**
	 * @var \TYPO3\Profession\Domain\Repository\OfferRepository
	 * @inject
	 */
	protected $offerRepository;

	/**
	 * @var \TYPO3\Profession\Domain\Repository\TypeRepository
	 * @inject
	 */
	protected $typeRepository;

	/**
	 * @var \TYPO3\Profession\Domain\Repository\CompanyRepository
	 * @inject
	 */
	protected $companyRepository;

	/**
	 *
	 * Show all offers
	 */
	public function indexAction() {
		$this->assignCategoriesAndCities();
	}

	/**
	 * @param \TYPO3\Profession\Domain\Model\Offer $offer
	 */
	public function detailAction(\TYPO3\Profession\Domain\Model\Offer $offer) {
		$this->view->assign('offer', $offer);
	}

	/**
	 * Filter offers
	 *
	 * @param \TYPO3\Profession\Domain\Model\Request\FilterRequest $filterRequest
	 */
	public function filterAction(\TYPO3\Profession\Domain\Model\Request\FilterRequest $filterRequest = NULL) {
		if(isset($filterRequest)){
			$offers = $this->offerRepository->findByRequest($filterRequest);
		}else{
			$offers = $this->offerRepository->findAll();
		}
		$this->view->assign('offers', $offers);
		$this->assignCategoriesAndCities();
	}

	/**
	 * @param string $searchWord
	 *
	 */
	public function searchAction($searchWord) {

		$properties = array(
			'whatWeOffer',
			'jobChallenge',
			'applicantProfile',
			'title',
		);

		if (MathUtility::canBeInterpretedAsInteger($searchWord)) {
			$offer = $this->offerRepository->findByUid(intval($searchWord));
			if ($offer instanceof Offer) {
				$this->redirect('detail', 'Profession', 'Profession', array('offer' => $offer));
			}
		}

		$offerResult = $this->offerRepository->findBySearchWord($properties, $searchWord);

		$this->assignCategoriesAndCities();
		$this->view->assign('offers', $offerResult);
	}

	/**
	 * @param \TYPO3\Profession\Domain\Model\Request\ApplicationRequest $applicationRequest
	 * @param \TYPO3\Profession\Domain\Model\Offer                      $offer
	 */
	public function applicationAction(\TYPO3\Profession\Domain\Model\Request\ApplicationRequest $applicationRequest = NULL, \TYPO3\Profession\Domain\Model\Offer $offer = NULL){
		$this->view->assign('offer', $offer);
		$this->view->assign('applicationRequest', $applicationRequest);
	}

	/**
	 * @param \TYPO3\Profession\Domain\Model\Request\ApplicationRequest $applicationRequest
	 * @param \TYPO3\Profession\Domain\Model\Offer                      $offer
	 */
	public function sendApplicationAction(\TYPO3\Profession\Domain\Model\Request\ApplicationRequest $applicationRequest, \TYPO3\Profession\Domain\Model\Offer $offer = NULL){
		DebuggerUtility::var_dump($application, $offer);
		$this->view->assign('applicationRequest', $applicationRequest);
	}

	/**
	 * Get categories and cities
	 *
	 * @return array
	 */
	private function assignCategoriesAndCities(){
		$this->view->assign('categories', $this->typeRepository->findAll());
		$this->view->assign('companies', $this->companyRepository->findAll());
	}

}