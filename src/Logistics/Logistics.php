<?php

declare(strict_types=1);

namespace FactoryMetody\Logistics;

abstract class Logistics
{
    abstract public function createTransport(): TransporteInterface;

    public function planDelivery()
    {
        $transporte = $this->createTransport();
        return $transporte->deliver();
    }
}
