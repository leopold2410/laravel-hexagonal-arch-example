<?php

namespace App\Domain\ValueObjects;

final class Address
{
    private string $street;
    private string $number;
    private string $postalCode;
    private string $city;

    public function __construct(string $street, string $number, string $postalCode, string $city) {
        $this->street = $street;
        $this->number = $number;
        $this->postalCode = $postalCode;
        $this->city = $city;
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
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    public function equals(Address $address): bool {
        return $this->street === $address->street
            and $this->number === $address->number
            and $this->postalCode === $address->postalCode
            and $this->city === $address->city;
    }
}
