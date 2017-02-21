<?php

namespace PlanningBundle\Entity;

use AccountBundle\Entity\Team;
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
     * @var Place
     */
    private $place;

    /** 
     * @var ArrayCollection
     */
    private $team;

    /**
     * Get team
     *
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set team
     *
     * @param Team $team
     *
     * @return Matchs
     */
    public function setTeam(Team $team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get place
     *
     * @return Place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set place
     *
     * @param Place $place
     *
     * @return Matchs
     */
    public function setPlace(Place $place)
    {
        $this->place = $place;

        return $this;
    }

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

