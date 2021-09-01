<?php

class Contains
{
    public function contains(string $string, string $valueToSearch)
    {
        return (str_contains($string, $valueToSearch)) ? 'Contém' : 'Não contém';
    }
}