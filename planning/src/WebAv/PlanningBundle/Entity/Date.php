<?php

namespace WebAv\PlanningBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebAv\PlanningBundle\Entity\DateRepository")
 */
class Date
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reservation
     *
     * @param \WebAv\PlanningBundle\Entity\Reservation $reservation
     * @return Date
     */
    public function setReservation(\WebAv\PlanningBundle\Entity\Reservation $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \WebAv\PlanningBundle\Entity\Reservation 
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
