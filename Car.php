<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php'; 

class Car extends Vehicle implements LightableInterface
{
    private string $energy;

    private int $energyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->hasParkBrake = true; 
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

  
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
    public function start(){
        if ($this->hasParkBrake) {
            throw new Exception("Le frein à main est activé !");
        }
        echo "La voiture démarre...\n";
    }

    public function switchOn()
    {
        return true;
    }
    public function switchOff()
    {
        return false;
    }
}