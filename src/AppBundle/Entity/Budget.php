<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Traits\TimestampableTrait;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BudgetRepository")
 */
class Budget
{

    use TimestampableTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="montlyIncome", type="float")
     */
    private $montlyIncome;

    /**
     * @var float
     *
     * @ORM\Column(name="fixedCost", type="float")
     */
    private $fixedCost;


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
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Budget
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Budget
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Budget
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set montlyIncome
     *
     * @param float $montlyIncome
     *
     * @return Budget
     */
    public function setMontlyIncome($montlyIncome)
    {
        $this->montlyIncome = $montlyIncome;

        return $this;
    }

    /**
     * Get montlyIncome
     *
     * @return float
     */
    public function getMontlyIncome()
    {
        return $this->montlyIncome;
    }

    /**
     * Set fixedCost
     *
     * @param float $fixedCost
     *
     * @return Budget
     */
    public function setFixedCost($fixedCost)
    {
        $this->fixedCost = $fixedCost;

        return $this;
    }

    /**
     * Get fixedCost
     *
     * @return float
     */
    public function getFixedCost()
    {
        return $this->fixedCost;
    }
}

