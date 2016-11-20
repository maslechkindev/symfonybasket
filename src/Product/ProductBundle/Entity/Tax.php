<?php

namespace Product\ProductBundle\Entity;

class Tax
{
    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $name;

    /** @var  integer */
    protected $value;

    /** @var  string */
    protected $countryId;

    /** @var  string */
    protected $created;
    
    /**
     * @var \Product\ProductBundle\Entity\Country
     */
    private $country;


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
     * @return Tax
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
     * Set value
     *
     * @param integer $value
     *
     * @return Tax
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return Tax
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set created
     *
     * @param \timestamp $created
     *
     * @return Tax
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
     * Set country
     *
     * @param \Product\ProductBundle\Entity\Country $country
     *
     * @return Tax
     */
    public function setCountry(\Product\ProductBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Product\ProductBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }
}
