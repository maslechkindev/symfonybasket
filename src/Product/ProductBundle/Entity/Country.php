<?php

namespace Product\ProductBundle\Entity;

class Country
{
    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $name;
    
    /** @var  string */
    protected $created;
    /**
     * @var string
     */
    private $oneToOne;


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
     *
     * @return Country
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
     * Set created
     *
     * @param \timestamp $created
     *
     * @return Country
     */
    public function setCreated(\timestamp $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \timestamp
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set oneToOne
     *
     * @param string $oneToOne
     *
     * @return Country
     */
    public function setOneToOne($oneToOne)
    {
        $this->oneToOne = $oneToOne;

        return $this;
    }

    /**
     * Get oneToOne
     *
     * @return string
     */
    public function getOneToOne()
    {
        return $this->oneToOne;
    }
}
