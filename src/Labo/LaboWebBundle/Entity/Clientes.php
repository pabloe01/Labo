<?php

namespace Labo\LaboWebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", indexes={@ORM\Index(name="Nombre", columns={"Nombre"})})
 * @ORM\Entity
 */
class Clientes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tratamiento", type="string", length=20, nullable=true)
     */
    private $tratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=70, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=50, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="CUIT", type="string", length=13, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=100, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_postal", type="string", length=10, nullable=true)
     */
    private $codPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="Ciudad", type="string", length=50, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Celular", type="string", length=20, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Responsable", type="string", length=150, nullable=true)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=20, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="IVA", type="string", length=20, nullable=true)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="Descuento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $descuento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_1_aviso", type="date", nullable=true)
     */
    private $fecha1Aviso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_2_aviso", type="date", nullable=true)
     */
    private $fecha2Aviso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_3_aviso", type="date", nullable=true)
     */
    private $fecha3Aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="Resp_1_aviso", type="string", length=100, nullable=true)
     */
    private $resp1Aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="Resp_2_aviso", type="string", length=100, nullable=true)
     */
    private $resp2Aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="Resp_3_aviso", type="string", length=100, nullable=true)
     */
    private $resp3Aviso;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre1", type="string", length=50, nullable=true)
     */
    private $nombre1;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono1", type="string", length=20, nullable=true)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail1", type="string", length=50, nullable=true)
     */
    private $mail1;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre2", type="string", length=50, nullable=true)
     */
    private $nombre2;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono2", type="string", length=20, nullable=true)
     */
    private $telefono2;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail2", type="string", length=50, nullable=true)
     */
    private $mail2;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre3", type="string", length=50, nullable=true)
     */
    private $nombre3;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono3", type="string", length=20, nullable=true)
     */
    private $telefono3;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail3", type="string", length=50, nullable=true)
     */
    private $mail3;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre4", type="string", length=50, nullable=true)
     */
    private $nombre4;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono4", type="string", length=20, nullable=true)
     */
    private $telefono4;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail4", type="string", length=50, nullable=true)
     */
    private $mail4;

    /**
     * @var string
     *
     * @ORM\Column(name="Casilla", type="string", length=10, nullable=true)
     */
    private $casilla;

    /**
     * @var string
     *
     * @ORM\Column(name="Categoria", type="string", length=50, nullable=true)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="Codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;



    /**
     * Set tratamiento
     *
     * @param string $tratamiento
     * @return Clientes
     */
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return string 
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Clientes
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Clientes
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Clientes
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Clientes
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set codPostal
     *
     * @param string $codPostal
     * @return Clientes
     */
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get codPostal
     *
     * @return string 
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Clientes
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Clientes
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Clientes
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Clientes
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Clientes
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
     * Set estado
     *
     * @param string $estado
     * @return Clientes
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set iva
     *
     * @param string $iva
     * @return Clientes
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
     * Set descuento
     *
     * @param string $descuento
     * @return Clientes
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
     * Set fecha1Aviso
     *
     * @param \DateTime $fecha1Aviso
     * @return Clientes
     */
    public function setFecha1Aviso($fecha1Aviso)
    {
        $this->fecha1Aviso = $fecha1Aviso;

        return $this;
    }

    /**
     * Get fecha1Aviso
     *
     * @return \DateTime 
     */
    public function getFecha1Aviso()
    {
        return $this->fecha1Aviso;
    }

    /**
     * Set fecha2Aviso
     *
     * @param \DateTime $fecha2Aviso
     * @return Clientes
     */
    public function setFecha2Aviso($fecha2Aviso)
    {
        $this->fecha2Aviso = $fecha2Aviso;

        return $this;
    }

    /**
     * Get fecha2Aviso
     *
     * @return \DateTime 
     */
    public function getFecha2Aviso()
    {
        return $this->fecha2Aviso;
    }

    /**
     * Set fecha3Aviso
     *
     * @param \DateTime $fecha3Aviso
     * @return Clientes
     */
    public function setFecha3Aviso($fecha3Aviso)
    {
        $this->fecha3Aviso = $fecha3Aviso;

        return $this;
    }

    /**
     * Get fecha3Aviso
     *
     * @return \DateTime 
     */
    public function getFecha3Aviso()
    {
        return $this->fecha3Aviso;
    }

    /**
     * Set resp1Aviso
     *
     * @param string $resp1Aviso
     * @return Clientes
     */
    public function setResp1Aviso($resp1Aviso)
    {
        $this->resp1Aviso = $resp1Aviso;

        return $this;
    }

    /**
     * Get resp1Aviso
     *
     * @return string 
     */
    public function getResp1Aviso()
    {
        return $this->resp1Aviso;
    }

    /**
     * Set resp2Aviso
     *
     * @param string $resp2Aviso
     * @return Clientes
     */
    public function setResp2Aviso($resp2Aviso)
    {
        $this->resp2Aviso = $resp2Aviso;

        return $this;
    }

    /**
     * Get resp2Aviso
     *
     * @return string 
     */
    public function getResp2Aviso()
    {
        return $this->resp2Aviso;
    }

    /**
     * Set resp3Aviso
     *
     * @param string $resp3Aviso
     * @return Clientes
     */
    public function setResp3Aviso($resp3Aviso)
    {
        $this->resp3Aviso = $resp3Aviso;

        return $this;
    }

    /**
     * Get resp3Aviso
     *
     * @return string 
     */
    public function getResp3Aviso()
    {
        return $this->resp3Aviso;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Clientes
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
     * Set nombre1
     *
     * @param string $nombre1
     * @return Clientes
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;

        return $this;
    }

    /**
     * Get nombre1
     *
     * @return string 
     */
    public function getNombre1()
    {
        return $this->nombre1;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     * @return Clientes
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string 
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set mail1
     *
     * @param string $mail1
     * @return Clientes
     */
    public function setMail1($mail1)
    {
        $this->mail1 = $mail1;

        return $this;
    }

    /**
     * Get mail1
     *
     * @return string 
     */
    public function getMail1()
    {
        return $this->mail1;
    }

    /**
     * Set nombre2
     *
     * @param string $nombre2
     * @return Clientes
     */
    public function setNombre2($nombre2)
    {
        $this->nombre2 = $nombre2;

        return $this;
    }

    /**
     * Get nombre2
     *
     * @return string 
     */
    public function getNombre2()
    {
        return $this->nombre2;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     * @return Clientes
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string 
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set mail2
     *
     * @param string $mail2
     * @return Clientes
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;

        return $this;
    }

    /**
     * Get mail2
     *
     * @return string 
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * Set nombre3
     *
     * @param string $nombre3
     * @return Clientes
     */
    public function setNombre3($nombre3)
    {
        $this->nombre3 = $nombre3;

        return $this;
    }

    /**
     * Get nombre3
     *
     * @return string 
     */
    public function getNombre3()
    {
        return $this->nombre3;
    }

    /**
     * Set telefono3
     *
     * @param string $telefono3
     * @return Clientes
     */
    public function setTelefono3($telefono3)
    {
        $this->telefono3 = $telefono3;

        return $this;
    }

    /**
     * Get telefono3
     *
     * @return string 
     */
    public function getTelefono3()
    {
        return $this->telefono3;
    }

    /**
     * Set mail3
     *
     * @param string $mail3
     * @return Clientes
     */
    public function setMail3($mail3)
    {
        $this->mail3 = $mail3;

        return $this;
    }

    /**
     * Get mail3
     *
     * @return string 
     */
    public function getMail3()
    {
        return $this->mail3;
    }

    /**
     * Set nombre4
     *
     * @param string $nombre4
     * @return Clientes
     */
    public function setNombre4($nombre4)
    {
        $this->nombre4 = $nombre4;

        return $this;
    }

    /**
     * Get nombre4
     *
     * @return string 
     */
    public function getNombre4()
    {
        return $this->nombre4;
    }

    /**
     * Set telefono4
     *
     * @param string $telefono4
     * @return Clientes
     */
    public function setTelefono4($telefono4)
    {
        $this->telefono4 = $telefono4;

        return $this;
    }

    /**
     * Get telefono4
     *
     * @return string 
     */
    public function getTelefono4()
    {
        return $this->telefono4;
    }

    /**
     * Set mail4
     *
     * @param string $mail4
     * @return Clientes
     */
    public function setMail4($mail4)
    {
        $this->mail4 = $mail4;

        return $this;
    }

    /**
     * Get mail4
     *
     * @return string 
     */
    public function getMail4()
    {
        return $this->mail4;
    }

    /**
     * Set casilla
     *
     * @param string $casilla
     * @return Clientes
     */
    public function setCasilla($casilla)
    {
        $this->casilla = $casilla;

        return $this;
    }

    /**
     * Get casilla
     *
     * @return string 
     */
    public function getCasilla()
    {
        return $this->casilla;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Clientes
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
