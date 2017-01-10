<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="pagos", indexes={@ORM\Index(name="Clientes", columns={"Cliente"}), @ORM\Index(name="Fecha", columns={"Fecha_ingreso"})})
 * @ORM\Entity
 */
class Pagos
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_ingreso", type="date", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo", type="string", length=3, nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cliente", type="integer", nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Importe", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Modo_pago", type="string", length=20, nullable=false)
     */
    private $modoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Banco", type="string", length=100, nullable=false)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="Cheque", type="string", length=45, nullable=false)
     */
    private $cheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_cheque", type="date", nullable=false)
     */
    private $fechaCheque;

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
     * @ORM\Column(name="idPago", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpago;



    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Pagos
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
     * Set tipo
     *
     * @param string $tipo
     * @return Pagos
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
     * Set cliente
     *
     * @param integer $cliente
     * @return Pagos
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
     * Set importe
     *
     * @param string $importe
     * @return Pagos
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set modoPago
     *
     * @param string $modoPago
     * @return Pagos
     */
    public function setModoPago($modoPago)
    {
        $this->modoPago = $modoPago;

        return $this;
    }

    /**
     * Get modoPago
     *
     * @return string 
     */
    public function getModoPago()
    {
        return $this->modoPago;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return Pagos
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set cheque
     *
     * @param string $cheque
     * @return Pagos
     */
    public function setCheque($cheque)
    {
        $this->cheque = $cheque;

        return $this;
    }

    /**
     * Get cheque
     *
     * @return string 
     */
    public function getCheque()
    {
        return $this->cheque;
    }

    /**
     * Set fechaCheque
     *
     * @param \DateTime $fechaCheque
     * @return Pagos
     */
    public function setFechaCheque($fechaCheque)
    {
        $this->fechaCheque = $fechaCheque;

        return $this;
    }

    /**
     * Get fechaCheque
     *
     * @return \DateTime 
     */
    public function getFechaCheque()
    {
        return $this->fechaCheque;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Pagos
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
     * @return Pagos
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
     * @return Pagos
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
     * @return Pagos
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
     * Get idpago
     *
     * @return integer 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }
}
