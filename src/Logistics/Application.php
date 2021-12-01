<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

class Application
{
    public function __invoke($configTransportadora)
    {
        if (Config::ROADLOGISTICA == $configTransportadora) {
            return new RoadLogistics();
        } elseif (Config::SEALOGISTICA == $configTransportadora) {
            return new SeaLogistics();
        } else {
            return throw new TransportException('Nem um transporte configurado ainda');
        }
    }
}