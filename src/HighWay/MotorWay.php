<?php

namespace App\HighWay;

use App\Vehicle;

final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 4;

    /**
     * @var int
     */
    protected $maxSpeed = 130;

    public function addVehicule(Vehicle\Vehicle $vehicle): void
    {
        if( $vehicle instanceof Vehicle\Car) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
        }
    }
}