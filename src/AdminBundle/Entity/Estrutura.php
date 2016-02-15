<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estrutura
 *
 * @ORM\Table(name="estrutura")
 * @ORM\Entity
 */
class Estrutura
{
    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=100, nullable=false)
     */
    private $imagepath;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set imagepath
     *
     * @param string $imagepath
     * @return Estrutura
     */
    public function setImagepath($imagepath)
    {
        $this->imagepath = $imagepath;

        return $this;
    }

    /**
     * Get imagepath
     *
     * @return string 
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }

    public function getThumbPath()
    {
        if ($this->imagepath) {
            $arr = explode('/', $this->imagepath);
            return $arr[0] . '/thumb/' . $arr[1];
        } else {
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
}
