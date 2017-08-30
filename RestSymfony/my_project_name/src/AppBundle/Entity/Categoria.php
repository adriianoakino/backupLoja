<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NomeCategoria", type="string", length=255)
     */
    private $nomeCategoria;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomeCategoria
     *
     * @param string $nomeCategoria
     *
     * @return Categoria
     */
    public function setNomeCategoria($nomeCategoria)
    {
        $this->nomeCategoria = $nomeCategoria;

        return $this;
    }

    /**
     * Get nomeCategoria
     *
     * @return string
     */
    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }
}

