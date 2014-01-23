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

use SJBR\StaticInfoTables\Utility\LocalizationUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\Hdnet\Controller\AbstractController;
use TYPO3\Profession\Domain\Model\Offer;
use TYPO3\Profession\Domain\Model\Request\ApplicationRequest;
use \TYPO3\Profession\Domain\Model\Request\FilterRequest;

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
	 * @var \TYPO3\Profession\Domain\Repository\StaticCountryRepository
	 * @inject
	 */
	protected $staticCountryRepository;

	/**
	 *
	 * Show all offers
	 */
	public function indexAction() {
		$this->assignCategoriesAndCities();
	}

	/**
	 * @param Offer $offer
	 */
	public function detailAction(Offer $offer) {
		$this->view->assign('offer', $offer);
	}

	/**
	 * Filter offers
	 *
	 * @param FilterRequest $filterRequest
	 */
	public function filterAction(FilterRequest $filterRequest = NULL) {
		if (isset($filterRequest)) {
			$offers = $this->offerRepository->findByRequest($filterRequest);
		} else {
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
	 * @param ApplicationRequest $applicationRequest
	 * @param Offer              $offer
	 */
	public function applicationAction(ApplicationRequest $applicationRequest = NULL, Offer $offer = NULL) {
		if ($applicationRequest === NULL) {
			$applicationRequest = new applicationRequest();
		}
		$applicationRequest->setOffer($offer);

		$this->view->assign('countries', $this->getCountries());
		$this->view->assign('applicationRequest', $applicationRequest);
	}

	/**
	 * @param ApplicationRequest $applicationRequest
	 */
	public function thanksAction(ApplicationRequest $applicationRequest) {
		$this->view->assign('applicationRequest', $applicationRequest);
	}

	/**
	 * Get categories and cities
	 *
	 * @return array
	 */
	private function assignCategoriesAndCities() {
		$this->view->assign('categories', $this->typeRepository->findAll());
		$this->view->assign('companies', $this->companyRepository->findAll());
	}

	/**
	 * Send mail
	 *
	 * @param ApplicationRequest $applicationRequest
	 *
	 * @view \TYPO3\Hdnet\View\MailView
	 */
	public function mailAction(ApplicationRequest $applicationRequest) {

		$this->view->assign('to', array($this->getTargetEmailAddress() => 'Personalabteilung'));
		$this->view->assign('from', array($applicationRequest->getEmail() => 'Bewerbung'));
		$this->view->assign('subject', 'Bewerbung von ' . $applicationRequest->getLastname() . ', ' . $applicationRequest->getFirstname() . ' // ' . $applicationRequest->getOffer()
		                                                                                                                                                                ->getTitle());
		$this->view->assign('applicant', $applicationRequest);
		//$this->view->assign('files', array($filepath));
		$this->view->render();
		$this->forward('thanks');
	}

	/**
	 * Get the target Email address
	 *
	 * @return string
	 */
	protected function getTargetEmailAddress() {
		if (isset($this->settings['emailAddress']) && GeneralUtility::validEmail(trim($this->settings['emailAddress']))) {
			return trim($this->settings['emailAddress']);
		}
		return '';
	}

	/**
	 * get all countries from static_countries table
	 *
	 * @return array
	 */
	public function getCountries() {
		$countries = $this->staticCountryRepository->findAll();
		$countryNames = array();
		foreach ($countries as $country) {
			$countryNames[] .= $country->getCnShortLocal();
		}
		return $countryNames;
	}

}