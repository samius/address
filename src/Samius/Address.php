<?php
declare(strict_types=1);

namespace Samius;

class Address
{
    /**
     * @var string
     */
    private $street;


    /**
     * @var string
     */
    private $city;


    /**
     * @var string
     */
    private $zip;


    /**
     * @var string
     */
    private $country;


    /**
     * Address constructor.
     * @param string $street
     * @param string|null $city
     * @param string $zip
     * @param string $country
     */
    public function __construct(?string $street = '', ?string $city = '', ?string $zip = '', ?string $country = '')
    {
        $this->street = $street;
        $this->city = $city;
        $this->zip = $zip;
        $this->country = $country;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        return [
            'street'  => $this->street,
            'city'    => $this->city,
            'zip'     => $this->zip,
            'country' => $this->country,
        ];
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $zip
     * @return Address
     */
    public function setZip(string $zip): Address
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @param string $country
     * @return Address
     */
    public function setCountry(string $country): Address
    {
        $this->country = $country;
        return $this;
    }
}
