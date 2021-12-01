<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

class Ship implements TransporteInterface
{
    public function deliver(): string
    {
        return 'Entregar por mar em um container!!!';
    }
}
