<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projects")
 */
class Project
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(length=3)
     */
    private $code;

    /**
     * @ORM\Column
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $hoursSpent = 0;

    /**
     * @ORM\ManyToOne(targetEntity="Language")
     * @ORM\JoinColumn(nullable=false)
     */
    private $language;

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setHoursSpent($hoursSpent)
    {
        $this->hoursSpent = $hoursSpent;
        return $this;
    }

    public function getHoursSpent()
    {
        return $this->hoursSpent;
    }

    public function setLanguage(Language $language)
    {
        $this->language = $language;
        return $this;
    }

    public function getLanguage()
    {
        return $this->language;
    }
}