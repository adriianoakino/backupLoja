<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produtos
 *
 * @ORM\Table(name="produtos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProdutosRepository")
 */
class Produtos
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
     * @ORM\Column(name="NomeProduto", type="string", length=255)
     */
    private $nomeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="CategoriaProduto", type="string", length=255)
     */
    private $categoriaProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="MarcaProduto", type="string", length=255)
     */
    private $marcaProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="AnoLancamento", type="string", length=255)
     */
    private $anoLancamento;

    /**
     * @var string
     *
     * @ORM\Column(name="DescProduto", type="string", length=500)
     */
    private $descProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="ImagemProduto", type="string", length=1000)
     */
    private $imagemProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="LinkProduto", type="string", length=700)
     */
    private $linkProduto;


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
     * Set nomeProduto
     *
     * @param string $nomeProduto
     *
     * @return Produtos
     */
    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    /**
     * Get nomeProduto
     *
     * @return string
     */
    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    /**
     * Set categoriaProduto
     *
     * @param string $categoriaProduto
     *
     * @return Produtos
     */
    public function setCategoriaProduto($categoriaProduto)
    {
        $this->categoriaProduto = $categoriaProduto;

        return $this;
    }

    /**
     * Get categoriaProduto
     *
     * @return string
     */
    public function getCategoriaProduto()
    {
        return $this->categoriaProduto;
    }

    /**
     * Set marcaProduto
     *
     * @param string $marcaProduto
     *
     * @return Produtos
     */
    public function setMarcaProduto($marcaProduto)
    {
        $this->marcaProduto = $marcaProduto;

        return $this;
    }

    /**
     * Get marcaProduto
     *
     * @return string
     */
    public function getMarcaProduto()
    {
        return $this->marcaProduto;
    }

    /**
     * Set anoLancamento
     *
     * @param string $anoLancamento
     *
     * @return Produtos
     */
    public function setAnoLancamento($anoLancamento)
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get anoLancamento
     *
     * @return string
     */
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set descProduto
     *
     * @param string $descProduto
     *
     * @return Produtos
     */
    public function setDescProduto($descProduto)
    {
        $this->descProduto = $descProduto;

        return $this;
    }

    /**
     * Get descProduto
     *
     * @return string
     */
    public function getDescProduto()
    {
        return $this->descProduto;
    }

    /**
     * Set imagemProduto
     *
     * @param string $imagemProduto
     *
     * @return Produtos
     */
    public function setImagemProduto($imagemProduto)
    {
        $this->imagemProduto = $imagemProduto;

        return $this;
    }

    /**
     * Get imagemProduto
     *
     * @return string
     */
    public function getImagemProduto()
    {
        return $this->imagemProduto;
    }

    /**
     * Set linkProduto
     *
     * @param string $linkProduto
     *
     * @return Produtos
     */
    public function setLinkProduto($linkProduto)
    {
        $this->linkProduto = $linkProduto;

        return $this;
    }

    /**
     * Get linkProduto
     *
     * @return string
     */
    public function getLinkProduto()
    {
        return $this->linkProduto;
    }
}

