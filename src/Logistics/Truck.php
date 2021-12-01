<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

class Truck implements TransporteInterface
{
    public function deliver(): string
    {
        return 'Entregar por terra em uma caixa!!!';
    }
}
