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
    private $zip;


    /**
     * @var string
     */
    private $country;


    /**
     * Address constructor.
     * @param string $street
     * @param string $zip
     * @param string $country
     */
    public function __construct(string $street, string $zip, string $country)
    {
        $this->street = $street;
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
}
