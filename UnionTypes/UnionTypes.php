<?php

class UnionTypes
{
    private array $data = [];

    public function setData(int|string $data): ?UnionTypes
    {
        return (array_push($this->data, $data) > 0) ? $this : null;
    }

    public function info()
    {
        var_dump($this->data);
    }
}