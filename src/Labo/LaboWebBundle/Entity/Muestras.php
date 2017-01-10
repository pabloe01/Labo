<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muestras
 *
 * @ORM\Table(name="muestras", indexes={@ORM\Index(name="Muestreo", columns={"Muestreo"}), @ORM\Index(name="Factura", columns={"Factura"}), @ORM\Index(name="Cliente", columns={"Cliente"}), @ORM\Index(name="Fecha", columns={"Fecha_ingreso"})})
 * @ORM\Entity
 */
class Muestras
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=50, nullable=false)
     */
    private $tipo;

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
     * @var string
     *
     * @ORM\Column(name="Descuento", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $descuento;

    /**
     * @var string
     *
     * @ORM\Column(name="campo1", type="string", length=200, nullable=false)
     */
    private $campo1;

    /**
     * @var string
     *
     * @ORM\Column(name="campo2", type="string", length=200, nullable=false)
     */
    private $campo2;

    /**
     * @var string
     *
     * @ORM\Column(name="campo3", type="string", length=200, nullable=false)
     */
    private $campo3;

    /**
     * @var string
     *
     * @ORM\Column(name="campo4", type="string", length=200, nullable=false)
     */
    private $campo4;

    /**
     * @var string
     *
     * @ORM\Column(name="campo5", type="string", length=200, nullable=false)
     */
    private $campo5;

    /**
     * @var string
     *
     * @ORM\Column(name="campo6", type="string", length=200, nullable=false)
     */
    private $campo6;

    /**
     * @var string
     *
     * @ORM\Column(name="campo7", type="string", length=200, nullable=false)
     */
    private $campo7;

    /**
     * @var string
     *
     * @ORM\Column(name="campo8", type="string", length=200, nullable=false)
     */
    private $campo8;

    /**
     * @var string
     *
     * @ORM\Column(name="campo9", type="string", length=200, nullable=false)
     */
    private $campo9;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_1", type="string", length=1, nullable=false)
     */
    private $cbx1;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_2", type="string", length=1, nullable=false)
     */
    private $cbx2;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_3", type="string", length=1, nullable=false)
     */
    private $cbx3;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_4", type="string", length=1, nullable=false)
     */
    private $cbx4;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_5", type="string", length=1, nullable=false)
     */
    private $cbx5;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_6", type="string", length=1, nullable=false)
     */
    private $cbx6;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_7", type="string", length=1, nullable=false)
     */
    private $cbx7;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_8", type="string", length=1, nullable=false)
     */
    private $cbx8;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_9", type="string", length=1, nullable=false)
     */
    private $cbx9;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_10", type="string", length=1, nullable=false)
     */
    private $cbx10;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_11", type="string", length=1, nullable=false)
     */
    private $cbx11;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_12", type="string", length=1, nullable=false)
     */
    private $cbx12;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_13", type="string", length=1, nullable=false)
     */
    private $cbx13;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_14", type="string", length=1, nullable=false)
     */
    private $cbx14;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_15", type="string", length=1, nullable=false)
     */
    private $cbx15;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_16", type="string", length=1, nullable=false)
     */
    private $cbx16;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_17", type="string", length=1, nullable=false)
     */
    private $cbx17;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_18", type="string", length=1, nullable=false)
     */
    private $cbx18;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_19", type="string", length=1, nullable=false)
     */
    private $cbx19;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_20", type="string", length=1, nullable=false)
     */
    private $cbx20;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_21", type="string", length=1, nullable=false)
     */
    private $cbx21;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_22", type="string", length=1, nullable=false)
     */
    private $cbx22;

    /**
     * @var string
     *
     * @ORM\Column(name="cbx_23", type="string", length=1, nullable=false)
     */
    private $cbx23;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado_muestra", type="string", length=20, nullable=false)
     */
    private $estadoMuestra;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregado", type="string", length=50, nullable=false)
     */
    private $entregado;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado_facturacion", type="string", length=20, nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="Muestreo", type="integer", nullable=false)
     */
    private $muestreo;

    /**
     * @var string
     *
     * @ORM\Column(name="NroMuestraTipoAUX", type="string", length=10, nullable=true)
     */
    private $nromuestratipoaux;

    /**
     * @var integer
     *
     * @ORM\Column(name="NroMuestraTipo", type="integer", nullable=false)
     */
    private $nromuestratipo;

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
     * @ORM\Column(name="idMuestra", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmuestra;



    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Muestras
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * Set campo1
     *
     * @param string $campo1
     * @return Muestras
     */
    public function setCampo1($campo1)
    {
        $this->campo1 = $campo1;

        return $this;
    }

    /**
     * Get campo1
     *
     * @return string 
     */
    public function getCampo1()
    {
        return $this->campo1;
    }

    /**
     * Set campo2
     *
     * @param string $campo2
     * @return Muestras
     */
    public function setCampo2($campo2)
    {
        $this->campo2 = $campo2;

        return $this;
    }

    /**
     * Get campo2
     *
     * @return string 
     */
    public function getCampo2()
    {
        return $this->campo2;
    }

    /**
     * Set campo3
     *
     * @param string $campo3
     * @return Muestras
     */
    public function setCampo3($campo3)
    {
        $this->campo3 = $campo3;

        return $this;
    }

    /**
     * Get campo3
     *
     * @return string 
     */
    public function getCampo3()
    {
        return $this->campo3;
    }

    /**
     * Set campo4
     *
     * @param string $campo4
     * @return Muestras
     */
    public function setCampo4($campo4)
    {
        $this->campo4 = $campo4;

        return $this;
    }

    /**
     * Get campo4
     *
     * @return string 
     */
    public function getCampo4()
    {
        return $this->campo4;
    }

    /**
     * Set campo5
     *
     * @param string $campo5
     * @return Muestras
     */
    public function setCampo5($campo5)
    {
        $this->campo5 = $campo5;

        return $this;
    }

    /**
     * Get campo5
     *
     * @return string 
     */
    public function getCampo5()
    {
        return $this->campo5;
    }

    /**
     * Set campo6
     *
     * @param string $campo6
     * @return Muestras
     */
    public function setCampo6($campo6)
    {
        $this->campo6 = $campo6;

        return $this;
    }

    /**
     * Get campo6
     *
     * @return string 
     */
    public function getCampo6()
    {
        return $this->campo6;
    }

    /**
     * Set campo7
     *
     * @param string $campo7
     * @return Muestras
     */
    public function setCampo7($campo7)
    {
        $this->campo7 = $campo7;

        return $this;
    }

    /**
     * Get campo7
     *
     * @return string 
     */
    public function getCampo7()
    {
        return $this->campo7;
    }

    /**
     * Set campo8
     *
     * @param string $campo8
     * @return Muestras
     */
    public function setCampo8($campo8)
    {
        $this->campo8 = $campo8;

        return $this;
    }

    /**
     * Get campo8
     *
     * @return string 
     */
    public function getCampo8()
    {
        return $this->campo8;
    }

    /**
     * Set campo9
     *
     * @param string $campo9
     * @return Muestras
     */
    public function setCampo9($campo9)
    {
        $this->campo9 = $campo9;

        return $this;
    }

    /**
     * Get campo9
     *
     * @return string 
     */
    public function getCampo9()
    {
        return $this->campo9;
    }

    /**
     * Set cbx1
     *
     * @param string $cbx1
     * @return Muestras
     */
    public function setCbx1($cbx1)
    {
        $this->cbx1 = $cbx1;

        return $this;
    }

    /**
     * Get cbx1
     *
     * @return string 
     */
    public function getCbx1()
    {
        return $this->cbx1;
    }

    /**
     * Set cbx2
     *
     * @param string $cbx2
     * @return Muestras
     */
    public function setCbx2($cbx2)
    {
        $this->cbx2 = $cbx2;

        return $this;
    }

    /**
     * Get cbx2
     *
     * @return string 
     */
    public function getCbx2()
    {
        return $this->cbx2;
    }

    /**
     * Set cbx3
     *
     * @param string $cbx3
     * @return Muestras
     */
    public function setCbx3($cbx3)
    {
        $this->cbx3 = $cbx3;

        return $this;
    }

    /**
     * Get cbx3
     *
     * @return string 
     */
    public function getCbx3()
    {
        return $this->cbx3;
    }

    /**
     * Set cbx4
     *
     * @param string $cbx4
     * @return Muestras
     */
    public function setCbx4($cbx4)
    {
        $this->cbx4 = $cbx4;

        return $this;
    }

    /**
     * Get cbx4
     *
     * @return string 
     */
    public function getCbx4()
    {
        return $this->cbx4;
    }

    /**
     * Set cbx5
     *
     * @param string $cbx5
     * @return Muestras
     */
    public function setCbx5($cbx5)
    {
        $this->cbx5 = $cbx5;

        return $this;
    }

    /**
     * Get cbx5
     *
     * @return string 
     */
    public function getCbx5()
    {
        return $this->cbx5;
    }

    /**
     * Set cbx6
     *
     * @param string $cbx6
     * @return Muestras
     */
    public function setCbx6($cbx6)
    {
        $this->cbx6 = $cbx6;

        return $this;
    }

    /**
     * Get cbx6
     *
     * @return string 
     */
    public function getCbx6()
    {
        return $this->cbx6;
    }

    /**
     * Set cbx7
     *
     * @param string $cbx7
     * @return Muestras
     */
    public function setCbx7($cbx7)
    {
        $this->cbx7 = $cbx7;

        return $this;
    }

    /**
     * Get cbx7
     *
     * @return string 
     */
    public function getCbx7()
    {
        return $this->cbx7;
    }

    /**
     * Set cbx8
     *
     * @param string $cbx8
     * @return Muestras
     */
    public function setCbx8($cbx8)
    {
        $this->cbx8 = $cbx8;

        return $this;
    }

    /**
     * Get cbx8
     *
     * @return string 
     */
    public function getCbx8()
    {
        return $this->cbx8;
    }

    /**
     * Set cbx9
     *
     * @param string $cbx9
     * @return Muestras
     */
    public function setCbx9($cbx9)
    {
        $this->cbx9 = $cbx9;

        return $this;
    }

    /**
     * Get cbx9
     *
     * @return string 
     */
    public function getCbx9()
    {
        return $this->cbx9;
    }

    /**
     * Set cbx10
     *
     * @param string $cbx10
     * @return Muestras
     */
    public function setCbx10($cbx10)
    {
        $this->cbx10 = $cbx10;

        return $this;
    }

    /**
     * Get cbx10
     *
     * @return string 
     */
    public function getCbx10()
    {
        return $this->cbx10;
    }

    /**
     * Set cbx11
     *
     * @param string $cbx11
     * @return Muestras
     */
    public function setCbx11($cbx11)
    {
        $this->cbx11 = $cbx11;

        return $this;
    }

    /**
     * Get cbx11
     *
     * @return string 
     */
    public function getCbx11()
    {
        return $this->cbx11;
    }

    /**
     * Set cbx12
     *
     * @param string $cbx12
     * @return Muestras
     */
    public function setCbx12($cbx12)
    {
        $this->cbx12 = $cbx12;

        return $this;
    }

    /**
     * Get cbx12
     *
     * @return string 
     */
    public function getCbx12()
    {
        return $this->cbx12;
    }

    /**
     * Set cbx13
     *
     * @param string $cbx13
     * @return Muestras
     */
    public function setCbx13($cbx13)
    {
        $this->cbx13 = $cbx13;

        return $this;
    }

    /**
     * Get cbx13
     *
     * @return string 
     */
    public function getCbx13()
    {
        return $this->cbx13;
    }

    /**
     * Set cbx14
     *
     * @param string $cbx14
     * @return Muestras
     */
    public function setCbx14($cbx14)
    {
        $this->cbx14 = $cbx14;

        return $this;
    }

    /**
     * Get cbx14
     *
     * @return string 
     */
    public function getCbx14()
    {
        return $this->cbx14;
    }

    /**
     * Set cbx15
     *
     * @param string $cbx15
     * @return Muestras
     */
    public function setCbx15($cbx15)
    {
        $this->cbx15 = $cbx15;

        return $this;
    }

    /**
     * Get cbx15
     *
     * @return string 
     */
    public function getCbx15()
    {
        return $this->cbx15;
    }

    /**
     * Set cbx16
     *
     * @param string $cbx16
     * @return Muestras
     */
    public function setCbx16($cbx16)
    {
        $this->cbx16 = $cbx16;

        return $this;
    }

    /**
     * Get cbx16
     *
     * @return string 
     */
    public function getCbx16()
    {
        return $this->cbx16;
    }

    /**
     * Set cbx17
     *
     * @param string $cbx17
     * @return Muestras
     */
    public function setCbx17($cbx17)
    {
        $this->cbx17 = $cbx17;

        return $this;
    }

    /**
     * Get cbx17
     *
     * @return string 
     */
    public function getCbx17()
    {
        return $this->cbx17;
    }

    /**
     * Set cbx18
     *
     * @param string $cbx18
     * @return Muestras
     */
    public function setCbx18($cbx18)
    {
        $this->cbx18 = $cbx18;

        return $this;
    }

    /**
     * Get cbx18
     *
     * @return string 
     */
    public function getCbx18()
    {
        return $this->cbx18;
    }

    /**
     * Set cbx19
     *
     * @param string $cbx19
     * @return Muestras
     */
    public function setCbx19($cbx19)
    {
        $this->cbx19 = $cbx19;

        return $this;
    }

    /**
     * Get cbx19
     *
     * @return string 
     */
    public function getCbx19()
    {
        return $this->cbx19;
    }

    /**
     * Set cbx20
     *
     * @param string $cbx20
     * @return Muestras
     */
    public function setCbx20($cbx20)
    {
        $this->cbx20 = $cbx20;

        return $this;
    }

    /**
     * Get cbx20
     *
     * @return string 
     */
    public function getCbx20()
    {
        return $this->cbx20;
    }

    /**
     * Set cbx21
     *
     * @param string $cbx21
     * @return Muestras
     */
    public function setCbx21($cbx21)
    {
        $this->cbx21 = $cbx21;

        return $this;
    }

    /**
     * Get cbx21
     *
     * @return string 
     */
    public function getCbx21()
    {
        return $this->cbx21;
    }

    /**
     * Set cbx22
     *
     * @param string $cbx22
     * @return Muestras
     */
    public function setCbx22($cbx22)
    {
        $this->cbx22 = $cbx22;

        return $this;
    }

    /**
     * Get cbx22
     *
     * @return string 
     */
    public function getCbx22()
    {
        return $this->cbx22;
    }

    /**
     * Set cbx23
     *
     * @param string $cbx23
     * @return Muestras
     */
    public function setCbx23($cbx23)
    {
        $this->cbx23 = $cbx23;

        return $this;
    }

    /**
     * Get cbx23
     *
     * @return string 
     */
    public function getCbx23()
    {
        return $this->cbx23;
    }

    /**
     * Set estadoMuestra
     *
     * @param string $estadoMuestra
     * @return Muestras
     */
    public function setEstadoMuestra($estadoMuestra)
    {
        $this->estadoMuestra = $estadoMuestra;

        return $this;
    }

    /**
     * Get estadoMuestra
     *
     * @return string 
     */
    public function getEstadoMuestra()
    {
        return $this->estadoMuestra;
    }

    /**
     * Set entregado
     *
     * @param string $entregado
     * @return Muestras
     */
    public function setEntregado($entregado)
    {
        $this->entregado = $entregado;

        return $this;
    }

    /**
     * Get entregado
     *
     * @return string 
     */
    public function getEntregado()
    {
        return $this->entregado;
    }

    /**
     * Set estadoFacturacion
     *
     * @param string $estadoFacturacion
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * Set muestreo
     *
     * @param integer $muestreo
     * @return Muestras
     */
    public function setMuestreo($muestreo)
    {
        $this->muestreo = $muestreo;

        return $this;
    }

    /**
     * Get muestreo
     *
     * @return integer 
     */
    public function getMuestreo()
    {
        return $this->muestreo;
    }

    /**
     * Set nromuestratipoaux
     *
     * @param string $nromuestratipoaux
     * @return Muestras
     */
    public function setNromuestratipoaux($nromuestratipoaux)
    {
        $this->nromuestratipoaux = $nromuestratipoaux;

        return $this;
    }

    /**
     * Get nromuestratipoaux
     *
     * @return string 
     */
    public function getNromuestratipoaux()
    {
        return $this->nromuestratipoaux;
    }

    /**
     * Set nromuestratipo
     *
     * @param integer $nromuestratipo
     * @return Muestras
     */
    public function setNromuestratipo($nromuestratipo)
    {
        $this->nromuestratipo = $nromuestratipo;

        return $this;
    }

    /**
     * Get nromuestratipo
     *
     * @return integer 
     */
    public function getNromuestratipo()
    {
        return $this->nromuestratipo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * @return Muestras
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
     * Get idmuestra
     *
     * @return integer 
     */
    public function getIdmuestra()
    {
        return $this->idmuestra;
    }
}
