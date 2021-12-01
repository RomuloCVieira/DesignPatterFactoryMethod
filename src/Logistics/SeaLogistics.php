<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

class SeaLogistics extends Logistics
{
    public function createTransport(): TransporteInterface
    {
        return new Ship();
    }
}
