<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

interface TransporteInterface
{
    public function deliver(): string;
}
