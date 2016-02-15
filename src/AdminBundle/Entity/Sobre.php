<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sobre
 *
 * @ORM\Table(name="sobre")
 * @ORM\Entity
 */
class Sobre
{
    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=false)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem", type="string", length=50, nullable=false)
     */
    private $imagem;

    /**
     * @var string
     *
     * @ORM\Column(name="imagemLateral", type="string", length=50, nullable=false)
     */
    private $imagemlateral;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set texto
     *
     * @param string $texto
     * @return Sobre
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set imagem
     *
     * @param string $imagem
     * @return Sobre
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get imagem
     *
     * @return string 
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set imagemlateral
     *
     * @param string $imagemlateral
     * @return Sobre
     */
    public function setImagemlateral($imagemlateral)
    {
        $this->imagemlateral = $imagemlateral;

        return $this;
    }

    /**
     * Get imagemlateral
     *
     * @return string 
     */
    public function getImagemlateral()
    {
        return $this->imagemlateral;
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
