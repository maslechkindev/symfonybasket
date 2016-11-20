<?php

namespace Product\ProductBundle\Entity;

class Product
{
    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $name;

    /** @var  string */
    protected $description;

    /** @var  float */
    protected $amount;

    /** @var  integer */
    protected $count;
    
    /** @var  string */
    protected $created;

    /**
     * @var \Basket\BasketBundle\Entity\Order
     */
    private $order;

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
     * @return Product
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
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Product
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return Product
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set created
     *
     * @param \timestamp $created
     *
     * @return Product
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
}
