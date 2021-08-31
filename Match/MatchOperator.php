<?php

class MatchOperator
{
    public function usingMatch(string $name): string
    {
        return match ($name){
            'Luiz' => 'Luiz',
            'Joao' => 'João',
            'Maria' => 'Maria',
            default => 'undefined'
        };
    }
}
