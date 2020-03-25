<?php

    class Resistance {
        public $EnergyType;
        public $Value;

        public function __construct($EnergyType, $Value)
        {
            $this->EnergyType = $EnergyType;
            $this->Value = $Value;
        }
    }

