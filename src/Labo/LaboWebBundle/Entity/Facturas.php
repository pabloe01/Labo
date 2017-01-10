<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas", indexes={@ORM\Index(name="Clientes", columns={"Cliente"}), @ORM\Index(name="Fecha", columns={"Fecha_ingreso"})})
 * @ORM\Entity
 */
class Facturas
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ingreso", type="date", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cliente", type="integer", nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Subtotal", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $subtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="Iva", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="Total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_factura", type="date", nullable=false)
     */
    private $fechaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="FacturaLegal", type="string", length=45, nullable=false)
     */
    private $facturalegal;

    /**
     * @var string
     *
     * @ORM\Column(name="Muestras", type="string", length=200, nullable=true)
     */
    private $muestras;

    /**
     * @var string
     *
     * @ORM\Column(name="Muestreos", type="string", length=200, nullable=true)
     */
    private $muestreos;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario_ingreso", type="string", length=20, nullable=false)
     */
    private $usuarioIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="Usuario_mod", type="string", length=20, nullable=false)
     */
    private $usuarioMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_mod", type="date", nullable=false)
     */
    private $fechaMod;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFactura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura;



    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Facturas
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set cliente
     *
     * @param integer $cliente
     * @return Facturas
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return integer 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return Facturas
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    /**
     * Get subtotal
     *
     * @return string 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return Facturas
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string 
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Facturas
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return Facturas
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set facturalegal
     *
     * @param string $facturalegal
     * @return Facturas
     */
    public function setFacturalegal($facturalegal)
    {
        $this->facturalegal = $facturalegal;

        return $this;
    }

    /**
     * Get facturalegal
     *
     * @return string 
     */
    public function getFacturalegal()
    {
        return $this->facturalegal;
    }

    /**
     * Set muestras
     *
     * @param string $muestras
     * @return Facturas
     */
    public function setMuestras($muestras)
    {
        $this->muestras = $muestras;

        return $this;
    }

    /**
     * Get muestras
     *
     * @return string 
     */
    public function getMuestras()
    {
        return $this->muestras;
    }

    /**
     * Set muestreos
     *
     * @param string $muestreos
     * @return Facturas
     */
    public function setMuestreos($muestreos)
    {
        $this->muestreos = $muestreos;

        return $this;
    }

    /**
     * Get muestreos
     *
     * @return string 
     */
    public function getMuestreos()
    {
        return $this->muestreos;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Facturas
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set usuarioIngreso
     *
     * @param string $usuarioIngreso
     * @return Facturas
     */
    public function setUsuarioIngreso($usuarioIngreso)
    {
        $this->usuarioIngreso = $usuarioIngreso;

        return $this;
    }

    /**
     * Get usuarioIngreso
     *
     * @return string 
     */
    public function getUsuarioIngreso()
    {
        return $this->usuarioIngreso;
    }

    /**
     * Set usuarioMod
     *
     * @param string $usuarioMod
     * @return Facturas
     */
    public function setUsuarioMod($usuarioMod)
    {
        $this->usuarioMod = $usuarioMod;

        return $this;
    }

    /**
     * Get usuarioMod
     *
     * @return string 
     */
    public function getUsuarioMod()
    {
        return $this->usuarioMod;
    }

    /**
     * Set fechaMod
     *
     * @param \DateTime $fechaMod
     * @return Facturas
     */
    public function setFechaMod($fechaMod)
    {
        $this->fechaMod = $fechaMod;

        return $this;
    }

    /**
     * Get fechaMod
     *
     * @return \DateTime 
     */
    public function getFechaMod()
    {
        return $this->fechaMod;
    }

    /**
     * Get idfactura
     *
     * @return integer 
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }
}
