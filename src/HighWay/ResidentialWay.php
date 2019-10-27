<?php

namespace App\HighWay;

use App\Vehicle;

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 2;

    /**
     * @var int
     */
    protected $maxSpeed = 50;

    public function addVehicule(Vehicle\Vehicle $vehicle): void
    {
        if( $vehicle instanceof Vehicle\Vehicle ) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
        }
    }
}