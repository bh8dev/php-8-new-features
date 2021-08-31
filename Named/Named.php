<?php

class Named
{
    public function info(string $name, bool $isAdmin)
    {
        return ($isAdmin) ? 'is admin' : 'is not an admin';
    }
}
