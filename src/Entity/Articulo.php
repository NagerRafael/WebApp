<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table(name="Articulo")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ArticuloRepository")
 */
class Articulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_articulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="Articulo_id_articulo_seq", allocationSize=1, initialValue=1)
     */
    private $idArticulo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=50, nullable=false)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $precio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true)
     */
    private $estado;


}
