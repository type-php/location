<?php

namespace Type\Location;

final class Address
{
    private ?string $street, $postalCode, $locality;
    private ?Country $country;

    public function __construct(Country $country = null, string $postalCode = null, string $locality = null, string $street = null)
    {
        $this->street = $street;
        $this->postalCode = $postalCode;
        $this->locality = $locality;
        $this->country = $country;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }
}
