<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MuestrasCampos
 *
 * @ORM\Table(name="muestras_campos")
 * @ORM\Entity
 */
class MuestrasCampos
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
     * @ORM\Column(name="Tipo_datos", type="string", length=45, nullable=true)
     */
    private $tipoDatos;

    /**
     * @var string
     *
     * @ORM\Column(name="Longitud", type="string", length=10, nullable=true)
     */
    private $longitud;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=1, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="ValoresFijos", type="string", length=300, nullable=false)
     */
    private $valoresFijos;

    /**
     * @var string
     *
     * @ORM\Column(name="Inactivo", type="string", length=1, nullable=true)
     */
    private $inactivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Reporte", type="string", length=1, nullable=true)
     */
    private $reporte;

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
     * @return MuestrasCampos
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
     * Set tipoDatos
     *
     * @param string $tipoDatos
     * @return MuestrasCampos
     */
    public function setTipoDatos($tipoDatos)
    {
        $this->tipoDatos = $tipoDatos;

        return $this;
    }

    /**
     * Get tipoDatos
     *
     * @return string 
     */
    public function getTipoDatos()
    {
        return $this->tipoDatos;
    }

    /**
     * Set longitud
     *
     * @param string $longitud
     * @return MuestrasCampos
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string 
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return MuestrasCampos
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set valoresFijos
     *
     * @param string $valoresFijos
     * @return MuestrasCampos
     */
    public function setValoresFijos($valoresFijos)
    {
        $this->valoresFijos = $valoresFijos;

        return $this;
    }

    /**
     * Get valoresFijos
     *
     * @return string 
     */
    public function getValoresFijos()
    {
        return $this->valoresFijos;
    }

    /**
     * Set inactivo
     *
     * @param string $inactivo
     * @return MuestrasCampos
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
     * Set reporte
     *
     * @param string $reporte
     * @return MuestrasCampos
     */
    public function setReporte($reporte)
    {
        $this->reporte = $reporte;

        return $this;
    }

    /**
     * Get reporte
     *
     * @return string 
     */
    public function getReporte()
    {
        return $this->reporte;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return MuestrasCampos
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
     * @return MuestrasCampos
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
