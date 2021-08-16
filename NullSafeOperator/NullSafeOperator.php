<?php

class NullSafeOperator
{
    private array $data = [];

    public function pushData(string $dataToInclude): ? self
    {
        array_push($this->data, $dataToInclude);
        return null;
    }

    public  function info()
    {
        var_dump($this->data);
    }
}