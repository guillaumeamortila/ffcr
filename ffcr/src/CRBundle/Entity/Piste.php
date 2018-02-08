<?php

namespace CRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Piste
 *
 * @ORM\Table(name="piste")
 * @ORM\Entity(repositoryClass="CRBundle\Repository\PisteRepository")
 */
class Piste
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
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="coordx", type="string", length=255)
     */
    private $coordx;

    /**
     * @var string
     *
     * @ORM\Column(name="coordy", type="string", length=255)
     */
    private $coordy;

    /**
     * @var string
     *
     * @ORM\Column(name="cheese", type="string", length=255)
     */
    private $cheese;


    /**
     * @ORM\OneToOne(targetEntity="EEMI\CRBundle\Entity\Course", mappedBy="piste")
     */
    private $courses;

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
     * Set ville
     *
     * @param string $ville
     *
     * @return Piste
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Piste
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Piste
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set coordx
     *
     * @param string $coordx
     *
     * @return Piste
     */
    public function setCoordx($coordx)
    {
        $this->coordx = $coordx;

        return $this;
    }

    /**
     * Get coordx
     *
     * @return string
     */
    public function getCoordx()
    {
        return $this->coordx;
    }

    /**
     * Set coordy
     *
     * @param string $coordy
     *
     * @return Piste
     */
    public function setCoordy($coordy)
    {
        $this->coordy = $coordy;

        return $this;
    }

    /**
     * Get coordy
     *
     * @return string
     */
    public function getCoordy()
    {
        return $this->coordy;
    }

    /**
     * Set cheese
     *
     * @param string $cheese
     *
     * @return Piste
     */
    public function setCheese($cheese)
    {
        $this->cheese = $cheese;

        return $this;
    }

    /**
     * Get cheese
     *
     * @return string
     */
    public function getCheese()
    {
        return $this->cheese;
    }

    /**
     * Set courses
     *
     * @param \EEMI\CRBundle\Entity\Course $courses
     *
     * @return Piste
     */
    public function setCourses(\EEMI\CRBundle\Entity\Course $courses = null)
    {
        $this->courses = $courses;

        return $this;
    }

    /**
     * Get courses
     *
     * @return \EEMI\CRBundle\Entity\Course
     */
    public function getCourses()
    {
        return $this->courses;
    }
}
