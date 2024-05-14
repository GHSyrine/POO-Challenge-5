<<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bike extends Vehicle implements LightableInterface
{
public function switchOff()
{
    return false;
}
public function switchOn()
{
    if ($this->currentSpeed >10){
        return true;
    }
}
}