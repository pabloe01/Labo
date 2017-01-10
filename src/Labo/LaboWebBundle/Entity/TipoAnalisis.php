<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAnalisis
 *
 * @ORM\Table(name="tipo_analisis")
 * @ORM\Entity
 */
class TipoAnalisis
{
    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=20, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Inactivo", type="string", length=1, nullable=false)
     */
    private $inactivo;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoAnalisis
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
     * Set inactivo
     *
     * @param string $inactivo
     * @return TipoAnalisis
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
     * Set tipo
     *
     * @param string $tipo
     * @return TipoAnalisis
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
     * @return TipoAnalisis
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
}
