<?php

namespace App\Livewire;

use Livewire\Component;

class BetCalculator extends Component
{

    public $Ticker;
    public $Bankroll;
    public $entry;
    public $PriceTarget1;
    public $probrwd1;
    public $PriceTarget2;
    public $probrwd2;
    public $PriceTarget3;
    public $probrwd3;
    public $StopOut;
    public $probrsk;
    public $operator;

    public $RWDL1;
    public $RWDL2;
    public $RWDL3;
    public $RWDS1;
    public $RWDS2;
    public $RWDS3;
    public $EV1;
    public $EV2;
    public $EV3;
    public $RISK;
    public $EVRSK;
    public $EDGE;
    public $RWDLTOTAL;
    public $KELLYLONG;
    public $ODDSOFBET;
    public $BetSize;
    public $MaxShares;
    public $MaxLoss;
    public $ValueAtStop;
    public $GOALRWD;
    public $TotalEVRWD;
    public $RWDSTOTAL;
    public $KELLYSHORT;



    public function calculate()
    {
        switch ($this->operator) {
            case 'None':
                // do nothing
                break;
            case 'Long':
                $this->calculateLong();
                break;
            case 'Short':
                $this->calculateShort();
                break;
        }
    }

    private function calculateLong()
    {
        // Calculate rewards based on price targets
        $this->RWDL1 = (float)$this->PriceTarget1 - (float)$this->entry;
        $this->RWDL2 = (float)$this->PriceTarget2 - (float)$this->entry;
        $this->RWDL3 = (float)$this->PriceTarget3 - (float)$this->entry;

        // Calculate expected value for each price target
        $this->EV1 = ((float)$this->PriceTarget1 - (float)$this->entry) * ((float)$this->probrwd1 / 100);
        $this->EV2 = ((float)$this->PriceTarget2 - (float)$this->entry) * ((float)$this->probrwd2 / 100);
        $this->EV3 = ((float)$this->PriceTarget3 - (float)$this->entry) * ((float)$this->probrwd3 / 100);

        // Calculate risk and its expected value
        $this->RISK = (float)$this->entry - (float)$this->StopOut;
        $this->EVRSK = ($this->RISK * (float)$this->probrsk / 100);

        // Calculate overall edge
        $this->EDGE = $this->EV1 + $this->EV2 + $this->EV3 - $this->EVRSK;

        // Calculate total average reward
        $this->RWDLTOTAL = ($this->RWDL1 + $this->RWDL2 + $this->RWDL3) / 3;

        // Calculate Kelly criterion for long position
        $this->KELLYLONG = (($this->EDGE / $this->RWDLTOTAL) * 100);

        // Calculate odds of the bet
        $this->ODDSOFBET = $this->RWDLTOTAL / $this->RISK;

        // Calculate the bet size
        $this->BetSize = (float)$this->Bankroll * ($this->KELLYLONG * 0.01);

        // Calculate the maximum number of shares to buy
        $this->MaxShares = $this->BetSize / (float)$this->entry;

        // Calculate the maximum possible loss
        $this->MaxLoss = $this->MaxShares * $this->RISK;

        // Calculate the value at the stop loss
        $this->ValueAtStop = (float)$this->StopOut * $this->MaxShares;

        // Calculate the goal reward
        $this->GOALRWD = $this->MaxShares * $this->RWDLTOTAL;

        // Calculate the total expected value of the reward
        $this->TotalEVRWD = $this->EV1 + $this->EV2 + $this->EV3;
    }

    private function calculateShort()
    {
        // Calculate rewards based on short price targets
        $this->RWDS1 = (float)$this->entry - (float)$this->PriceTarget1;
        $this->RWDS2 = (float)$this->entry - (float)$this->PriceTarget2;
        $this->RWDS3 = (float)$this->entry - (float)$this->PriceTarget3;

        // Calculate expected value for each short price target
        $this->EV1 = ((float)$this->entry - (float)$this->PriceTarget1) * ((float)$this->probrwd1 / 100);
        $this->EV2 = ((float)$this->entry - (float)$this->PriceTarget2) * ((float)$this->probrwd2 / 100);
        $this->EV3 = ((float)$this->entry - (float)$this->PriceTarget3) * ((float)$this->probrwd3 / 100);

        // Calculate risk and its expected value
        $this->RISK = (float)$this->StopOut - (float)$this->entry;
        $this->EVRSK = ($this->RISK * (float)$this->probrsk / 100);

        // Calculate overall edge
        $this->EDGE = $this->EV1 + $this->EV2 + $this->EV3 - $this->EVRSK;

        // Calculate total average reward for short
        $this->RWDSTOTAL = ($this->RWDS1 + $this->RWDS2 + $this->RWDS3) / 3;

        // Calculate Kelly criterion for short position
        $this->KELLYSHORT = (($this->EDGE / $this->RWDSTOTAL) * 100);

        // Calculate odds of the bet
        $this->ODDSOFBET = $this->RWDSTOTAL / $this->RISK;

        // Calculate the bet size
        $this->BetSize = (float)$this->Bankroll * ($this->KELLYSHORT * 0.01);

        // Calculate the maximum number of shares to short
        $this->MaxShares = $this->BetSize / (float)$this->StopOut;

        // Calculate the maximum possible loss
        $this->MaxLoss = $this->MaxShares * $this->RISK;

        // Calculate the value at the stop loss
        $this->ValueAtStop = (float)$this->StopOut * $this->MaxShares;

        // Calculate the goal reward
        $this->GOALRWD = $this->MaxShares * $this->RWDSTOTAL;

        // Calculate the total expected value of the reward
        $this->TotalEVRWD = $this->EV1 + $this->EV2 + $this->EV3;
    }
    public function render()
    {
        return view('livewire.bet-calculator');
    }
}
