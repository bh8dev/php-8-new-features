<?php

class Constructor
{
    public function __construct(
        private string $name,
        private int $age
    ){}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
