<?php
class speedChecker
{
  public function __construct(private int $speed) {}

  public function speedSensor(): string
  {
    if ($this->speed < 30) {
      return 'Molt lent';
    } elseif ($this->speed <= 60) {
      return 'Velocitat adequada';
    } elseif ($this->speed <= 80) {
      return 'Excés lleu';
    } elseif ($this->speed <= 100) {
      return 'Excés moderat';
    } elseif ($this->speed > 100) {
      return 'Excés greu';
    }
    return 'Velocitat introduida no vàlida';
  }
}
