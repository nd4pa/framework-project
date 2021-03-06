<?php

namespace FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 *
 * @ORM\Table(name="trajet", indexes={@ORM\Index(name="internaute_id", columns={"internaute_id"}), @ORM\Index(name="ville_id", columns={"ville_id"}), @ORM\Index(name="ville_id1", columns={"ville_id1"})})
 * @ORM\Entity
 */
class Trajet
{
    /**
     * @var string
     *
     * @ORM\Column(name="nb_km", type="string", length=45, nullable=true)
     */
    private $nbKm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \FrontOfficeBundle\Entity\Internaute
     *
     * @ORM\ManyToOne(targetEntity="FrontOfficeBundle\Entity\Internaute")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="internaute_id", referencedColumnName="id")
     * })
     */
    private $internaute;

    /**
     * @var \FrontOfficeBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="FrontOfficeBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id", referencedColumnName="id")
     * })
     */
    private $ville;

    /**
     * @var \FrontOfficeBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="FrontOfficeBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ville_id1", referencedColumnName="id")
     * })
     */
    private $ville1;


}

