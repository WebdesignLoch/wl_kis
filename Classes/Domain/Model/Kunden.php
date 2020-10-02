<?php
namespace Wl\WlKis\Domain\Model;


/***
 *
 * This file is part of the "Kundenverwaltung" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Timo Loch <info@webdesign-loch.de>, Webdesign-Loch
 *
 ***/
/**
 * Kunden
 */
class Kunden extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * vormane
     * 
     * @var string
     */
    protected $vormane = '';

    /**
     * adresse
     * 
     * @var string
     */
    protected $adresse = '';

    /**
     * hausnummer
     * 
     * @var string
     */
    protected $hausnummer = '';

    /**
     * ort
     * 
     * @var string
     */
    protected $ort = '';

    /**
     * plz
     * 
     * @var string
     */
    protected $plz = '';

    /**
     * telefon
     * 
     * @var string
     */
    protected $telefon = '';

    /**
     * mobil
     * 
     * @var string
     */
    protected $mobil = '';

    /**
     * fax
     * 
     * @var string
     */
    protected $fax = '';

    /**
     * webseite
     * 
     * @var string
     */
    protected $webseite = '';

    /**
     * firma
     * 
     * @var string
     */
    protected $firma = '';

    /**
     * socialmedia
     * 
     * @var string
     */
    protected $socialmedia = '';

    /**
     * bemerkungen
     * 
     * @var string
     */
    protected $bemerkungen = '';

    /**
     * vorname
     * 
     * @var string
     */
    protected $vorname = '';

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the vormane
     * 
     * @return string $vormane
     */
    public function getVormane()
    {
        return $this->vormane;
    }

    /**
     * Sets the vormane
     * 
     * @param string $vormane
     * @return void
     */
    public function setVormane($vormane)
    {
        $this->vormane = $vormane;
    }

    /**
     * Returns the adresse
     * 
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets the adresse
     * 
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Returns the hausnummer
     * 
     * @return string $hausnummer
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * Sets the hausnummer
     * 
     * @param string $hausnummer
     * @return void
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;
    }

    /**
     * Returns the ort
     * 
     * @return string $ort
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets the ort
     * 
     * @param string $ort
     * @return void
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * Returns the plz
     * 
     * @return string $plz
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Sets the plz
     * 
     * @param string $plz
     * @return void
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
    }

    /**
     * Returns the telefon
     * 
     * @return string $telefon
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Sets the telefon
     * 
     * @param string $telefon
     * @return void
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * Returns the mobil
     * 
     * @return string $mobil
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Sets the mobil
     * 
     * @param string $mobil
     * @return void
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;
    }

    /**
     * Returns the fax
     * 
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets the fax
     * 
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * Returns the webseite
     * 
     * @return string $webseite
     */
    public function getWebseite()
    {
        return $this->webseite;
    }

    /**
     * Sets the webseite
     * 
     * @param string $webseite
     * @return void
     */
    public function setWebseite($webseite)
    {
        $this->webseite = $webseite;
    }

    /**
     * Returns the firma
     * 
     * @return string $firma
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Sets the firma
     * 
     * @param string $firma
     * @return void
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
    }

    /**
     * Returns the socialmedia
     * 
     * @return string $socialmedia
     */
    public function getSocialmedia()
    {
        return $this->socialmedia;
    }

    /**
     * Sets the socialmedia
     * 
     * @param string $socialmedia
     * @return void
     */
    public function setSocialmedia($socialmedia)
    {
        $this->socialmedia = $socialmedia;
    }

    /**
     * Returns the bemerkungen
     * 
     * @return string $bemerkungen
     */
    public function getBemerkungen()
    {
        return $this->bemerkungen;
    }

    /**
     * Sets the bemerkungen
     * 
     * @param string $bemerkungen
     * @return void
     */
    public function setBemerkungen($bemerkungen)
    {
        $this->bemerkungen = $bemerkungen;
    }

    /**
     * Returns the vorname
     * 
     * @return string $vorname
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * Sets the vorname
     * 
     * @param string $vorname
     * @return void
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }
}
