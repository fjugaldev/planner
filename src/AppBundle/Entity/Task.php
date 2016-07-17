<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Traits\TimestampableTrait;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var $list
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TaskList")
     * @ORM\JoinColumn(name="list_id", referencedColumnName="id")
     */
    private $list;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_done", type="boolean")
     */
    private $isDone;


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
     * Set name
     *
     * @param string $name
     *
     * @return Task
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
     * Set list
     *
     * @param integer $list
     *
     * @return Task
     */
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get list
     *
     * @return int
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return Task
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return bool
     */
    public function getIsDone()
    {
        return $this->isDone;
    }
}

