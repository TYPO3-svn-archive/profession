<?php
/**
 * MailValidator
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Validation\Validator
 * @author     Ercüment TOpal <ercuement.topal@hdnet.de>
 */

namespace TYPO3\Profession\Validation\Validator;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;
use TYPO3\CMS\Extbase\Validation\Validator\EmailAddressValidator;

/**
 * MailValidator
 *
 * @package    Profession
 * @subpackage Validation\Validator
 * @author     Ercüment Topal <ercuement.topal@hdnet.de>
 */
class MailValidator extends EmailAddressValidator {

	/**
	 * Checks if the field is not empty or the given address has the right format for an E-Mail and returns different messages.
	 *
	 * @param mixed $value The value that should be validated
	 *
	 * @return boolean TRUE if the value is valid, FALSE if an error occured
	 */
	public function isValid($value) {
		if(!trim($value)) {
			$this->addError(LocalizationUtility::translate('validator.emailaddress.empty', 'extbase'), 5421563143265);
			return FALSE;
		}
		return parent::isValid($value);
	}
}