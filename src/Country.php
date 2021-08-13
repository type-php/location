<?php

namespace Type\Location;

final class Country
{
    /** @var ?string */
    private $name, $code;

    public function __construct(string $name = null, string $code = null)
    {
        if (null === $name && null === $code) {
            throw new \InvalidArgumentException('A country must have either a name or a code');
        }

        $this->name = $name;
        $this->code = $code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function __toString(): string
    {
        return $this->getName() ?: '';
    }
}
