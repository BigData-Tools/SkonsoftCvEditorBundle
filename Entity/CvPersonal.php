<?php

namespace Skonsoft\Bundle\CvEditorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\CvEditorBundle\Entity\CvPersonal
 *
 * @ORM\Table(name="cv_personal")
 * @ORM\Entity
 */
class CvPersonal
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $lastName
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string $lastNamePrefix
     *
     * @ORM\Column(name="last_name_prefix", type="string", length=255, nullable=true)
     */
    private $lastNamePrefix;

    /**
     * @var string $initials
     *
     * @ORM\Column(name="initials", type="string", length=45, nullable=true)
     */
    private $initials;

    /**
     * @var string $firstName
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string $middleName
     *
     * @ORM\Column(name="middle_name", type="string", length=255, nullable=true)
     */
    private $middleName;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime $dateOfBirth
     *
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var string $placeOfBirth
     *
     * @ORM\Column(name="place_of_birth", type="string", length=255, nullable=true)
     */
    private $placeOfBirth;

    /**
     * @var string $maritalStatus
     *
     * @ORM\Column(name="marital_status", type="string", length=255, nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var integer $genderCode
     *
     * @ORM\Column(name="gender_code", type="integer", nullable=true)
     */
    private $genderCode;

    /**
     * @var string $driversLicence
     *
     * @ORM\Column(name="drivers_licence", type="string", length=255, nullable=true)
     */
    private $driversLicence;

    /**
     * @var string $availability
     *
     * @ORM\Column(name="availability", type="string", length=255, nullable=true)
     */
    private $availability;

    /**
     * @var CvAddress
     *
     * @ORM\ManyToOne(targetEntity="CvAddress", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cv_address_id", referencedColumnName="id")
     * })
     */
    private $cvAddress;

    public function __toString() {
        return $this->getLastName()." ".$this->getFirstName();
    }

        /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return CvPersonal
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set lastNamePrefix
     *
     * @param string $lastNamePrefix
     * @return CvPersonal
     */
    public function setLastNamePrefix($lastNamePrefix)
    {
        $this->lastNamePrefix = $lastNamePrefix;
    
        return $this;
    }

    /**
     * Get lastNamePrefix
     *
     * @return string 
     */
    public function getLastNamePrefix()
    {
        return $this->lastNamePrefix;
    }

    /**
     * Set initials
     *
     * @param string $initials
     * @return CvPersonal
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;
    
        return $this;
    }

    /**
     * Get initials
     *
     * @return string 
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return CvPersonal
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return CvPersonal
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CvPersonal
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return CvPersonal
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     * @return CvPersonal
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;
    
        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     * @return CvPersonal
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    
        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return CvPersonal
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    
        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set genderCode
     *
     * @param integer $genderCode
     * @return CvPersonal
     */
    public function setGenderCode($genderCode)
    {
        $this->genderCode = $genderCode;
    
        return $this;
    }

    /**
     * Get genderCode
     *
     * @return integer 
     */
    public function getGenderCode()
    {
        return $this->genderCode;
    }

    /**
     * Set driversLicence
     *
     * @param string $driversLicence
     * @return CvPersonal
     */
    public function setDriversLicence($driversLicence)
    {
        $this->driversLicence = $driversLicence;
    
        return $this;
    }

    /**
     * Get driversLicence
     *
     * @return string 
     */
    public function getDriversLicence()
    {
        return $this->driversLicence;
    }

    /**
     * Set availability
     *
     * @param string $availability
     * @return CvPersonal
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    
        return $this;
    }

    /**
     * Get availability
     *
     * @return string 
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set cvAddress
     *
     * @param Skonsoft\Bundle\CvEditorBundle\Entity\CvAddress $cvAddress
     * @return CvPersonal
     */
    public function setCvAddress(\Skonsoft\Bundle\CvEditorBundle\Entity\CvAddress $cvAddress = null)
    {
        $this->cvAddress = $cvAddress;
    
        return $this;
    }

    /**
     * Get cvAddress
     *
     * @return Skonsoft\Bundle\CvEditorBundle\Entity\CvAddress 
     */
    public function getCvAddress()
    {
        return $this->cvAddress;
    }
}