<?php

class ClassObjects
{
    private array $data = [];

    public function getData(string $data)
    {
        array_push($this->data, $data);
        return $this;
    }

    public function getDataInformation()
    {
        var_dump($this->data);
    }
}
