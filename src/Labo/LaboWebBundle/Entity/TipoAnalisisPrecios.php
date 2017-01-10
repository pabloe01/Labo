<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAnalisisPrecios
 *
 * @ORM\Table(name="tipo_analisis_precios")
 * @ORM\Entity
 */
class TipoAnalisisPrecios
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
     * @ORM\Column(name="Tipo", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ubicacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ubicacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaDesde", type="date")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechadesde;



    /**
     * Set precio
     *
     * @param string $precio
     * @return TipoAnalisisPrecios
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
     * Set tipo
     *
     * @param string $tipo
     * @return TipoAnalisisPrecios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set ubicacion
     *
     * @param integer $ubicacion
     * @return TipoAnalisisPrecios
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return integer 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set fechadesde
     *
     * @param \DateTime $fechadesde
     * @return TipoAnalisisPrecios
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
}
