<?php
/**
 * Career Controller
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Controller
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */

namespace HDNET\Profession\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\MathUtility;
use HDNET\Hdnet\Controller\AbstractController;
use HDNET\Hdnet\Utility\TranslateUtility;
use HDNET\Profession\Domain\Model\Offer;
use HDNET\Profession\Domain\Model\Request\ApplicationRequest;
use HDNET\Profession\Domain\Model\Request\FilterRequest;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * CareerController
 *
 * @package    Profession
 * @subpackage Controller
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class ProfessionController extends AbstractController {

	/**
	 * @var \HDNET\Profession\Domain\Repository\OfferRepository
	 * @inject
	 */
	protected $offerRepository;

	/**
	 * @var \HDNET\Profession\Domain\Repository\TypeRepository
	 * @inject
	 */
	protected $typeRepository;

	/**
	 * @var \HDNET\Profession\Domain\Repository\CompanyRepository
	 * @inject
	 */
	protected $companyRepository;

	/**
	 * @var \HDNET\Profession\Domain\Repository\StaticCountryRepository
	 * @inject
	 */
	protected $staticCountryRepository;

	/**
	 * @var \HDNET\Profession\Domain\Repository\CandidateTypeRepository
	 * @inject
	 */
	protected $candidateTypeRepository;

	/**
	 *
	 */
	public function initializeAction() {
		/** @var \TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface $settings */
		$settings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\QuerySettingsInterface');
		$settings->setRespectStoragePage(FALSE);
		$this->offerRepository->setDefaultQuerySettings($settings);
		$this->typeRepository->setDefaultQuerySettings($settings);
		$this->candidateTypeRepository->setDefaultQuerySettings($settings);
	}

	/**
	 *
	 * Show all offers
	 */
	public function indexAction() {
		$this->view->assign('candidateTypes', $this->candidateTypeRepository->findByUids(GeneralUtility::intExplode(',', $this->settings['candidateType'], TRUE)));
		DebuggerUtility::var_dump($this->candidateTypeRepository->findByUids(GeneralUtility::intExplode(',', $this->settings['candidateType'], TRUE)));
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
		$this->view->assign('request', $filterRequest);
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
		$this->view->assign('searchWord', $searchWord);
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

		$this->view->assign('genders', $this->getGender());
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
	 * @view \HDNET\Hdnet\View\MailView
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
	protected function getCountries() {
		$countries = $this->staticCountryRepository->findAll();
		$countryNames = array();
		/** @var \HDNET\Profession\Domain\Model\StaticCountry $country */
		foreach ($countries as $country) {
			$countryNames[] .= $country->getShortNameDE();
		}
		asort($countryNames);
		return $countryNames;
	}

	/**
	 * Get locallang information for gender
	 *
	 * @return array
	 */
	protected function getGender() {
		return array(
			'1' => TranslateUtility::assureLabel('application.gender.w', 'Profession'),
			'2' => TranslateUtility::assureLabel('application.gender.m', 'Profession')
		);
	}
}