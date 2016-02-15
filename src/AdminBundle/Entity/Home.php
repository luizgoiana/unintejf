<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Home
 *
 * @ORM\Table(name="home")
 * @ORM\Entity
 */
class Home
{
    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=255, nullable=false)
     */
    private $shortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="specialtyShortDescription", type="string", length=255, nullable=false)
     */
    private $specialtyshortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="bannerMiddleFrase", type="string", length=100, nullable=false)
     */
    private $bannermiddlefrase;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     * @return Home
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string 
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set specialtyshortdescription
     *
     * @param string $specialtyshortdescription
     * @return Home
     */
    public function setSpecialtyshortdescription($specialtyshortdescription)
    {
        $this->specialtyshortdescription = $specialtyshortdescription;

        return $this;
    }

    /**
     * Get specialtyshortdescription
     *
     * @return string 
     */
    public function getSpecialtyshortdescription()
    {
        return $this->specialtyshortdescription;
    }

    /**
     * Set bannermiddlefrase
     *
     * @param string $bannermiddlefrase
     * @return Home
     */
    public function setBannermiddlefrase($bannermiddlefrase)
    {
        $this->bannermiddlefrase = $bannermiddlefrase;

        return $this;
    }

    /**
     * Get bannermiddlefrase
     *
     * @return string 
     */
    public function getBannermiddlefrase()
    {
        return $this->bannermiddlefrase;
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
}
