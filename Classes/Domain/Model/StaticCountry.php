<?php

/**
 * Static Country
 *
 * @category   Extension
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Tim Lochmüller <tim.lochmueller@hdnet.de>
 */

namespace HDNET\Profession\Domain\Model;
use HDNET\Hdnet\Domain\Model\AbstractModel;

/**
 * Static Country
 *
 * @package    Profession
 * @subpackage Domain\Model
 * @author     Tim Lochmüller <tim.lochmueller@hdnet.de>
 * @todo auf static table info tables modelle umstellen.
 */
class StaticCountry extends AbstractModel {

	/**
	 * ISO 2
	 *
	 * @var string
	 */
	protected $cnIso2;

	/**
	 * ISO 3
	 *
	 * @var string
	 */
	protected $cnIso3;

	/**
	 * ISO Nr
	 *
	 * @var int
	 */
	protected $cnIsoNr;

	/**
	 * Parent TR ISO Nr
	 *
	 * @var int
	 */
	protected $cnParentTrIsoNr;

	/**
	 * official name (local)
	 *
	 * @var string
	 */
	protected $cnOfficialNameLocal;

	/**
	 * official name (english)
	 *
	 * @var string
	 */
	protected $cnOfficialNameEn;

	/**
	 * capitcal
	 *
	 * @var string
	 */
	protected $cnCapital;

	/**
	 * Toplevel Domain
	 *
	 * @var string
	 */
	protected $cnTldomain;

	/**
	 * Toplevel Domain
	 *
	 * @var string
	 */
	protected $cnCurrencyIso3;

	/**
	 * Currency ISO Nr
	 *
	 * @var int
	 */
	protected $cnCurrencyIsoNr;

	/**
	 * Phone
	 *
	 * @var int
	 */
	protected $cnPhone;

	/**
	 * EU Member
	 *
	 * @var int
	 */
	protected $cnEuMember;

	/**
	 * UNO Member
	 *
	 * @var int
	 */
	protected $cnUnoMember;

	/**
	 * Address Format
	 *
	 * @var int
	 */
	protected $cnAddressFormat;

	/**
	 * Zone flag
	 *
	 * @var int
	 */
	protected $cnZoneFlag;

	/**
	 * Short local
	 *
	 * @var string
	 */
	protected $cnShortLocal;

	/**
	 * Short english
	 *
	 * @var string
	 */
	protected $cnShortEn;

	/**
	 * Set the address format
	 *
	 * @param int $cnAddressFormat
	 */
	public function setCnAddressFormat($cnAddressFormat) {
		$this->cnAddressFormat = $cnAddressFormat;
	}

	/**
	 * Get the address format
	 *
	 * @return int
	 */
	public function getCnAddressFormat() {
		return $this->cnAddressFormat;
	}

	/**
	 * set the capital
	 *
	 * @param string $cnCapital
	 */
	public function setCnCapital($cnCapital) {
		$this->cnCapital = $cnCapital;
	}

	/**
	 * get the capital
	 *
	 * @return string
	 */
	public function getCnCapital() {
		return $this->cnCapital;
	}

	/**
	 * Set the currency ISO 3
	 *
	 * @param string $cnCurrencyIso3
	 */
	public function setCnCurrencyIso3($cnCurrencyIso3) {
		$this->cnCurrencyIso3 = $cnCurrencyIso3;
	}

	/**
	 * Get the currency ISO 3
	 *
	 * @return string
	 */
	public function getCnCurrencyIso3() {
		return $this->cnCurrencyIso3;
	}

	/**
	 * Set the currency ISO Nr
	 *
	 * @param int $cnCurrencyIsoNr
	 */
	public function setCnCurrencyIsoNr($cnCurrencyIsoNr) {
		$this->cnCurrencyIsoNr = $cnCurrencyIsoNr;
	}

	/**
	 * Get the currency ISO Nr
	 *
	 * @return int
	 */
	public function getCnCurrencyIsoNr() {
		return $this->cnCurrencyIsoNr;
	}

	/**
	 * Set the EU Member
	 *
	 * @param int $cnEuMember
	 */
	public function setCnEuMember($cnEuMember) {
		$this->cnEuMember = $cnEuMember;
	}

	/**
	 * Get the EU Member
	 *
	 * @return int
	 */
	public function getCnEuMember() {
		return $this->cnEuMember;
	}

	/**
	 * Set the ISO 2
	 *
	 * @param string $cnIso2
	 */
	public function setCnIso2($cnIso2) {
		$this->cnIso2 = $cnIso2;
	}

	/**
	 * Get the ISO 2
	 *
	 * @return string
	 */
	public function getCnIso2() {
		return $this->cnIso2;
	}

	/**
	 * Set the ISO 3
	 *
	 * @param string $cnIso3
	 */
	public function setCnIso3($cnIso3) {
		$this->cnIso3 = $cnIso3;
	}

	/**
	 * Get the ISO 3
	 *
	 * @return string
	 */
	public function getCnIso3() {
		return $this->cnIso3;
	}

	/**
	 * Set the ISO Nr
	 *
	 * @param int $cnIsoNr
	 */
	public function setCnIsoNr($cnIsoNr) {
		$this->cnIsoNr = $cnIsoNr;
	}

	/**
	 * Get the ISO Nr
	 *
	 * @return int
	 */
	public function getCnIsoNr() {
		return $this->cnIsoNr;
	}

	/**
	 * Set the official name (english)
	 *
	 * @param string $cnOfficialNameEn
	 */
	public function setCnOfficialNameEn($cnOfficialNameEn) {
		$this->cnOfficialNameEn = $cnOfficialNameEn;
	}

	/**
	 * Get the official name (english)
	 *
	 * @return string
	 */
	public function getCnOfficialNameEn() {
		return $this->cnOfficialNameEn;
	}

	/**
	 * Set the official name (local)
	 *
	 * @param string $cnOfficialNameLocal
	 */
	public function setCnOfficialNameLocal($cnOfficialNameLocal) {
		$this->cnOfficialNameLocal = $cnOfficialNameLocal;
	}

	/**
	 * Get the official name (local)
	 *
	 * @return string
	 */
	public function getCnOfficialNameLocal() {
		return $this->cnOfficialNameLocal;
	}

	/**
	 * Set the parent tr ISO Nr
	 *
	 * @param int $cnParentTrIsoNr
	 */
	public function setCnParentTrIsoNr($cnParentTrIsoNr) {
		$this->cnParentTrIsoNr = $cnParentTrIsoNr;
	}

	/**
	 * Get the parent tr ISO Nr
	 *
	 * @return int
	 */
	public function getCnParentTrIsoNr() {
		return $this->cnParentTrIsoNr;
	}

	/**
	 * Set the phone
	 *
	 * @param int $cnPhone
	 */
	public function setCnPhone($cnPhone) {
		$this->cnPhone = $cnPhone;
	}

	/**
	 * Get the phone
	 *
	 * @return int
	 */
	public function getCnPhone() {
		return $this->cnPhone;
	}

	/**
	 * Set the Short (english)
	 *
	 * @param string $cnShortEn
	 */
	public function setCnShortEn($cnShortEn) {
		$this->cnShortEn = $cnShortEn;
	}

	/**
	 * Get the Short (english)
	 *
	 * @return string
	 */
	public function getCnShortEn() {
		return $this->cnShortEn;
	}

	/**
	 * Set the Short (local)
	 *
	 * @param string $cnShortLocal
	 */
	public function setCnShortLocal($cnShortLocal) {
		$this->cnShortLocal = $cnShortLocal;
	}

	/**
	 * Get the Short (local)
	 *
	 * @return string
	 */
	public function getCnShortLocal() {
		return $this->cnShortLocal;
	}

	/**
	 * Set the TLD Domain
	 *
	 * @param string $cnTldomain
	 */
	public function setCnTldomain($cnTldomain) {
		$this->cnTldomain = $cnTldomain;
	}

	/**
	 * Get the TLD Domain
	 *
	 * @return string
	 */
	public function getCnTldomain() {
		return $this->cnTldomain;
	}

	/**
	 * Set UNO Member
	 *
	 * @param int $cnUnoMember
	 */
	public function setCnUnoMember($cnUnoMember) {
		$this->cnUnoMember = $cnUnoMember;
	}

	/**
	 * Get UNO Member
	 *
	 * @return int
	 */
	public function getCnUnoMember() {
		return $this->cnUnoMember;
	}

	/**
	 * Set zone flag
	 *
	 * @param int $cnZoneFlag
	 */
	public function setCnZoneFlag($cnZoneFlag) {
		$this->cnZoneFlag = $cnZoneFlag;
	}

	/**
	 * Get zone flag
	 *
	 * @return int
	 */
	public function getCnZoneFlag() {
		return $this->cnZoneFlag;
	}
}