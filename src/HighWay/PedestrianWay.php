<?php

namespace App\HighWay;

use App\Vehicle;

final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 1;

    /**
     * @var int
     */
    protected $maxSpeed = 10;

    public function addVehicule(Vehicle\Vehicle $vehicle): void
    {
        if ($vehicle instanceof Vehicle\Bicycle or $vehicle instanceof Vehicle\Skateboard) {
            $vehicles = $this->getCurrentVehicles();
            $vehicles[] = $vehicle;
            $this->setCurrentVehicles($vehicles);
        }
    }
}