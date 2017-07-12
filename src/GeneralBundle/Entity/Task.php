<?php

namespace GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="GeneralBundle\Repository\TaskRepository")
 */
class Task
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
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var int
     *
     * @ORM\Column(name="prize", type="decimal", precision=11, scale=2)
     */
    private $prize;
    
    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string")
     */
    
    private $category;
    

    /**
     * @var string
     *
     * @ORM\Column(name="addedBy", type="string", length=20)
     */
    private $addedBy;


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
     * Set name
     *
     * @param string $name
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
     * Set date
     *
     * @param \DateTime $date
     * @return Task
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
     * Set place
     *
     * @param string $place
     * @return Task
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }
    
    /**
     * 
     * @param type $category
     * @return \GeneralBundle\Entity\Task
     */
    
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
    
    /**
     * Get category
     * 
     * @return string
     */
    
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set prize
     *
     * @param integer $prize
     * @return Task
     */
    public function setPrize($prize)
    {
        $this->prize = $prize;

        return $this;
    }

    /**
     * Get prize
     *
     * @return integer 
     */
    public function getPrize()
    {
        return $this->prize;
    }

    /**
     * Set addedBy
     *
     * @param string $addedBy
     * @return Task
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return string 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }
}
