<?php
declare(strict_types=1);

namespace Samius\Address;

class Company
{
    /**
     * @var string
     */
    private $name;

    /**
     * Company registration number
     * @var string
     */
    private $crn;


    /**
     * VAT identification number
     * @var string
     */
    private $vatin;


    /**
     * Company constructor.
     * @param string $crn
     * @param string $vatin
     */
    public function __construct(string $name, string $crn, string $vatin)
    {
        $this->name = $name;
        $this->crn = $crn;
        $this->vatin = $vatin;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCrn(): string
    {
        return $this->crn;
    }

    /**
     * @return string
     */
    public function getVatin(): string
    {
        return $this->vatin;
    }

    /**
     * @return array
     */
    public function toArray():array
    {
        return [
            'name'=>$this->name,
            'crn' => $this->crn,
            'vatin' => $this->vatin,
        ];
    }


}
