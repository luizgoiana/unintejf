<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagebannerhome
 *
 * @ORM\Table(name="imagebannerhome", indexes={@ORM\Index(name="idHome", columns={"idHome"})})
 * @ORM\Entity
 */
class Imagebannerhome
{
    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=100, nullable=false)
     */
    private $path;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AdminBundle\Entity\Home
     *
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Home")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHome", referencedColumnName="id")
     * })
     */
    private $idhome;



    /**
     * Set path
     *
     * @param string $path
     * @return Imagebannerhome
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    public function getThumbPath()
    {
        if ($this->path){
            $arr = explode('/',$this->path);
            return $arr[0].'/thumb/'.$arr[1];
        }else{
            return null;
        }

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
     * Set idhome
     *
     * @param \AdminBundle\Entity\Home $idhome
     * @return Imagebannerhome
     */
    public function setIdhome(\AdminBundle\Entity\Home $idhome = null)
    {
        $this->idhome = $idhome;

        return $this;
    }

    /**
     * Get idhome
     *
     * @return \AdminBundle\Entity\Home 
     */
    public function getIdhome()
    {
        return $this->idhome;
    }
}
