<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OffreRepository")
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contactName", type="string", length=255)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contactMail", type="string", length=255)
     */
    private $contactMail;

    /**
     * @var string
     *
     * @ORM\Column(name="entrepriseName", type="string", length=255)
     */
    private $entrepriseName;

    /**
     * @var string
     *
     * @ORM\Column(name="entrepriseAdresse", type="string", length=255)
     */
    private $entrepriseAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="entrepriseVille", type="string", length=255)
     */
    private $entrepriseVille;

    /**
     * @var int
     *
     * @ORM\Column(name="entrepriseCodePostal", type="integer")
     */
    private $entrepriseCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOffre", type="string", length=255)
     */
    private $nameOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="detailOffre", type="string", length=255)
     */
    private $detailOffre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return Offre
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactMail
     *
     * @param string $contactMail
     *
     * @return Offre
     */
    public function setContactMail($contactMail)
    {
        $this->contactMail = $contactMail;

        return $this;
    }

    /**
     * Get contactMail
     *
     * @return string
     */
    public function getContactMail()
    {
        return $this->contactMail;
    }

    /**
     * Set entrepriseName
     *
     * @param string $entrepriseName
     *
     * @return Offre
     */
    public function setEntrepriseName($entrepriseName)
    {
        $this->entrepriseName = $entrepriseName;

        return $this;
    }

    /**
     * Get entrepriseName
     *
     * @return string
     */
    public function getEntrepriseName()
    {
        return $this->entrepriseName;
    }

    /**
     * Set entrepriseAdresse
     *
     * @param string $entrepriseAdresse
     *
     * @return Offre
     */
    public function setEntrepriseAdresse($entrepriseAdresse)
    {
        $this->entrepriseAdresse = $entrepriseAdresse;

        return $this;
    }

    /**
     * Get entrepriseAdresse
     *
     * @return string
     */
    public function getEntrepriseAdresse()
    {
        return $this->entrepriseAdresse;
    }

    /**
     * Set entrepriseVille
     *
     * @param string $entrepriseVille
     *
     * @return Offre
     */
    public function setEntrepriseVille($entrepriseVille)
    {
        $this->entrepriseVille = $entrepriseVille;

        return $this;
    }

    /**
     * Get entrepriseVille
     *
     * @return string
     */
    public function getEntrepriseVille()
    {
        return $this->entrepriseVille;
    }

    /**
     * Set entrepriseCodePostal
     *
     * @param integer $entrepriseCodePostal
     *
     * @return Offre
     */
    public function setEntrepriseCodePostal($entrepriseCodePostal)
    {
        $this->entrepriseCodePostal = $entrepriseCodePostal;

        return $this;
    }

    /**
     * Get entrepriseCodePostal
     *
     * @return int
     */
    public function getEntrepriseCodePostal()
    {
        return $this->entrepriseCodePostal;
    }

    /**
     * Set nameOffre
     *
     * @param string $nameOffre
     *
     * @return Offre
     */
    public function setNameOffre($nameOffre)
    {
        $this->nameOffre = $nameOffre;

        return $this;
    }

    /**
     * Get nameOffre
     *
     * @return string
     */
    public function getNameOffre()
    {
        return $this->nameOffre;
    }

    /**
     * Set detailOffre
     *
     * @param string $detailOffre
     *
     * @return Offre
     */
    public function setDetailOffre($detailOffre)
    {
        $this->detailOffre = $detailOffre;

        return $this;
    }

    /**
     * Get detailOffre
     *
     * @return string
     */
    public function getDetailOffre()
    {
        return $this->detailOffre;
    }
}

