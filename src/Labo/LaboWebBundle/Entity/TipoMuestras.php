<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoMuestras
 *
 * @ORM\Table(name="tipo_muestras")
 * @ORM\Entity
 */
class TipoMuestras
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Muestreo", type="string", length=1, nullable=false)
     */
    private $muestreo;

    /**
     * @var string
     *
     * @ORM\Column(name="Inactivo", type="string", length=1, nullable=false)
     */
    private $inactivo;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoMuestras
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set muestreo
     *
     * @param string $muestreo
     * @return TipoMuestras
     */
    public function setMuestreo($muestreo)
    {
        $this->muestreo = $muestreo;

        return $this;
    }

    /**
     * Get muestreo
     *
     * @return string 
     */
    public function getMuestreo()
    {
        return $this->muestreo;
    }

    /**
     * Set inactivo
     *
     * @param string $inactivo
     * @return TipoMuestras
     */
    public function setInactivo($inactivo)
    {
        $this->inactivo = $inactivo;

        return $this;
    }

    /**
     * Get inactivo
     *
     * @return string 
     */
    public function getInactivo()
    {
        return $this->inactivo;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
