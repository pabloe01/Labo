<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muestreos
 *
 * @ORM\Table(name="muestreos", indexes={@ORM\Index(name="Cliente", columns={"Cliente"}), @ORM\Index(name="Factura", columns={"Factura"}), @ORM\Index(name="Fecha", columns={"Fecha_ingreso"})})
 * @ORM\Entity
 */
class Muestreos
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
     * @ORM\Column(name="Responsable", type="string", length=100, nullable=false)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="Precio_Muestreo", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $precioMuestreo;

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
     * @var string
     *
     * @ORM\Column(name="Descuento", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="Viaticos", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $viaticos;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado_facturacion", type="string", length=20, nullable=true)
     */
    private $estadoFacturacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_facturacion", type="date", nullable=false)
     */
    private $fechaFacturacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Factura", type="string", length=45, nullable=false)
     */
    private $factura;

    /**
     * @var string
     *
     * @ORM\Column(name="Cultivo", type="string", length=50, nullable=false)
     */
    private $cultivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Campo", type="string", length=50, nullable=false)
     */
    private $campo;

    /**
     * @var string
     *
     * @ORM\Column(name="Lote", type="string", length=50, nullable=false)
     */
    private $lote;

    /**
     * @var string
     *
     * @ORM\Column(name="Profundidad", type="string", length=50, nullable=false)
     */
    private $profundidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Hectarias", type="string", length=50, nullable=false)
     */
    private $hectarias;

    /**
     * @var string
     *
     * @ORM\Column(name="Kilometros", type="string", length=50, nullable=false)
     */
    private $kilometros;

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
     * @ORM\Column(name="idMuestreo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmuestreo;



    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Muestreos
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
     * @return Muestreos
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
     * Set responsable
     *
     * @param string $responsable
     * @return Muestreos
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set precioMuestreo
     *
     * @param string $precioMuestreo
     * @return Muestreos
     */
    public function setPrecioMuestreo($precioMuestreo)
    {
        $this->precioMuestreo = $precioMuestreo;

        return $this;
    }

    /**
     * Get precioMuestreo
     *
     * @return string 
     */
    public function getPrecioMuestreo()
    {
        return $this->precioMuestreo;
    }

    /**
     * Set subtotal
     *
     * @param string $subtotal
     * @return Muestreos
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
     * @return Muestreos
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
     * @return Muestreos
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
     * Set descuento
     *
     * @param string $descuento
     * @return Muestreos
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Set viaticos
     *
     * @param string $viaticos
     * @return Muestreos
     */
    public function setViaticos($viaticos)
    {
        $this->viaticos = $viaticos;

        return $this;
    }

    /**
     * Get viaticos
     *
     * @return string 
     */
    public function getViaticos()
    {
        return $this->viaticos;
    }

    /**
     * Set estadoFacturacion
     *
     * @param string $estadoFacturacion
     * @return Muestreos
     */
    public function setEstadoFacturacion($estadoFacturacion)
    {
        $this->estadoFacturacion = $estadoFacturacion;

        return $this;
    }

    /**
     * Get estadoFacturacion
     *
     * @return string 
     */
    public function getEstadoFacturacion()
    {
        return $this->estadoFacturacion;
    }

    /**
     * Set fechaFacturacion
     *
     * @param \DateTime $fechaFacturacion
     * @return Muestreos
     */
    public function setFechaFacturacion($fechaFacturacion)
    {
        $this->fechaFacturacion = $fechaFacturacion;

        return $this;
    }

    /**
     * Get fechaFacturacion
     *
     * @return \DateTime 
     */
    public function getFechaFacturacion()
    {
        return $this->fechaFacturacion;
    }

    /**
     * Set factura
     *
     * @param string $factura
     * @return Muestreos
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;

        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set cultivo
     *
     * @param string $cultivo
     * @return Muestreos
     */
    public function setCultivo($cultivo)
    {
        $this->cultivo = $cultivo;

        return $this;
    }

    /**
     * Get cultivo
     *
     * @return string 
     */
    public function getCultivo()
    {
        return $this->cultivo;
    }

    /**
     * Set campo
     *
     * @param string $campo
     * @return Muestreos
     */
    public function setCampo($campo)
    {
        $this->campo = $campo;

        return $this;
    }

    /**
     * Get campo
     *
     * @return string 
     */
    public function getCampo()
    {
        return $this->campo;
    }

    /**
     * Set lote
     *
     * @param string $lote
     * @return Muestreos
     */
    public function setLote($lote)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Get lote
     *
     * @return string 
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set profundidad
     *
     * @param string $profundidad
     * @return Muestreos
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

    /**
     * Set hectarias
     *
     * @param string $hectarias
     * @return Muestreos
     */
    public function setHectarias($hectarias)
    {
        $this->hectarias = $hectarias;

        return $this;
    }

    /**
     * Get hectarias
     *
     * @return string 
     */
    public function getHectarias()
    {
        return $this->hectarias;
    }

    /**
     * Set kilometros
     *
     * @param string $kilometros
     * @return Muestreos
     */
    public function setKilometros($kilometros)
    {
        $this->kilometros = $kilometros;

        return $this;
    }

    /**
     * Get kilometros
     *
     * @return string 
     */
    public function getKilometros()
    {
        return $this->kilometros;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Muestreos
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
     * @return Muestreos
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
     * @return Muestreos
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
     * @return Muestreos
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
     * Get idmuestreo
     *
     * @return integer 
     */
    public function getIdmuestreo()
    {
        return $this->idmuestreo;
    }
}
