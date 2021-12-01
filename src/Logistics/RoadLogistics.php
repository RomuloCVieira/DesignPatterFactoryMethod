<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

class RoadLogistics extends Logistics
{
    public function createTransport(): TransporteInterface
    {
        return new Truck();
    }
}
