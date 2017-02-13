<?php

namespace PlanningBundle\Entity;

/**
 * Matchs
 */
class Matchs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateMatch;

    /**
     * @var bool
     */
    private $domicile;


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
     * Set dateMatch
     *
     * @param \DateTime $dateMatch
     *
     * @return Matchs
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;

        return $this;
    }

    /**
     * Get dateMatch
     *
     * @return \DateTime
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * Set domicile
     *
     * @param boolean $domicile
     *
     * @return Matchs
     */
    public function setDomicile($domicile)
    {
        $this->domicile = $domicile;

        return $this;
    }

    /**
     * Get domicile
     *
     * @return bool
     */
    public function getDomicile()
    {
        return $this->domicile;
    }
}

