<?php

namespace Basket\BasketBundle\Entity;

class Order
{
    /** @var  integer */
    protected $id;

    /** @var  integer */
    protected $quantity;

    /** @var  integer */
    protected $basketId;

    /** @var  integer */
    protected $productId;

    /** @var  string */
    protected $created;
    /**
     * @var \Basket\BasketBundle\Entity\Basket
     */
    private $basket;
    /**
     * @var \Product\ProductBundle\Entity\Product
     */
    private $product;


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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Order
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Order
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set basket
     *
     * @param \Basket\BasketBundle\Entity\Basket $basket
     *
     * @return Order
     */
    public function setBasket(\Basket\BasketBundle\Entity\Basket $basket = null)
    {
        $this->basket = $basket;

        return $this;
    }

    /**
     * Get basket
     *
     * @return \Basket\BasketBundle\Entity\Basket
     */
    public function getBasket()
    {
        return $this->basket;
    }
}
