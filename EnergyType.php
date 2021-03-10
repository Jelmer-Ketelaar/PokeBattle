<?php

class EnergyType
{
    private $name;
    /** Word uitgevoerd voor elke nieuwe EnergyType
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
     * @return string $name
     */
    public function getname()
    {
        return $this->name;
    }
}
