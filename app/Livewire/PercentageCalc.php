<?php

namespace App\Livewire;

use Livewire\Component;

class PercentageCalc extends Component
{
    public $StartValue;
    public $EndValue;
    public $Duration;
    public $Gain;
    public $AnnualizedRateReturn;
    public $PercentageIncrease;
    public $PercentageDecrease;


    public function render()
    {
        return view('livewire.percentage-calc');
    }

    public function percentageCalculate()
    {
        if (!empty($this->StartValue) && !empty($this->EndValue) && !empty($this->Duration)) {
            $this->Gain = $this->EndValue - $this->StartValue;
            $this->AnnualizedRateReturn = (($this->StartValue + $this->Gain) / $this->StartValue) ** (365 / $this->Duration) - 1;

            if ($this->StartValue < $this->EndValue) {
                $this->PercentageIncrease = (($this->EndValue - $this->StartValue) / $this->StartValue) * 100;
            } elseif ($this->EndValue < $this->StartValue) {
                $this->PercentageDecrease = (($this->StartValue - $this->EndValue) / $this->StartValue) * 100;
            }
        }
    }
}
