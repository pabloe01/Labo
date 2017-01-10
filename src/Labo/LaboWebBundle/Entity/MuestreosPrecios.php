<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MuestreosPrecios
 *
 * @ORM\Table(name="muestreos_precios")
 * @ORM\Entity
 */
class MuestreosPrecios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Precio", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="Viatico", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $viatico;

    /**
     * @var string
     *
     * @ORM\Column(name="Inactivo", type="string", length=1, nullable=true)
     */
    private $inactivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaDesde", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechadesde;

    /**
     * @var string
     *
     * @ORM\Column(name="Profundidad", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $profundidad;



    /**
     * Set precio
     *
     * @param string $precio
     * @return MuestreosPrecios
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set viatico
     *
     * @param string $viatico
     * @return MuestreosPrecios
     */
    public function setViatico($viatico)
    {
        $this->viatico = $viatico;

        return $this;
    }

    /**
     * Get viatico
     *
     * @return string 
     */
    public function getViatico()
    {
        return $this->viatico;
    }

    /**
     * Set inactivo
     *
     * @param string $inactivo
     * @return MuestreosPrecios
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
     * Set fechadesde
     *
     * @param \DateTime $fechadesde
     * @return MuestreosPrecios
     */
    public function setFechadesde($fechadesde)
    {
        $this->fechadesde = $fechadesde;

        return $this;
    }

    /**
     * Get fechadesde
     *
     * @return \DateTime 
     */
    public function getFechadesde()
    {
        return $this->fechadesde;
    }

    /**
     * Set profundidad
     *
     * @param string $profundidad
     * @return MuestreosPrecios
     */
    public function setProfundidad($profundidad)
    {
        $this->profundidad = $profundidad;

        return $this;
    }

    /**
     * Get profundidad
     *
     * @return string 
     */
    public function getProfundidad()
    {
        return $this->profundidad;
    }
}
