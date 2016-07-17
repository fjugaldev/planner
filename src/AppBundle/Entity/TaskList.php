<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Traits\TimestampableTrait;

/**
 * TaskList
 *
 * @ORM\Table(name="task_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskListRepository")
 */
class TaskList
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
     * @var $tasks
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Task", mappedBy="list")
     */
    private $tasks;

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
     * @return TaskList
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
     * Set tasks
     *
     * @param integer $tasks
     *
     * @return TaskList
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return int
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return TaskList
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

