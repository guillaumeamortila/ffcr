<?php

namespace CRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="CRBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="CRBundle\Entity\Piste", inversedBy="courses")
     */
    private $piste;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Course
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
     * Set date
     *
     * @param string $date
     *
     * @return Course
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set piste
     *
     * @param \EEMI\DevoirBundle\Entity\Piste $piste
     *
     * @return Course
     */
    public function setPiste(\EEMI\DevoirBundle\Entity\Piste $piste = null)
    {
        $this->piste = $piste;

        return $this;
    }

    /**
     * Get piste
     *
     * @return \EEMI\DevoirBundle\Entity\Piste
     */
    public function getPiste()
    {
        return $this->piste;
    }
}
