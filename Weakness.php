<?php

class weakness
{
    private $name;
    private $multiplier;
    /** Constructor wordt uitgevoerd als er een nieuw object wordt aangemaakt
     * @param string $name
     * @param int $multiplier
     */
    public function __construct($name, $multiplier)
    {
        $this->name = $name;
        $this->multiplier = $multiplier;
    }
    /** Pakt de naam van de energy type
     * @return string $name
     */
    public function getweaknessType()
    {
        return $this->name;
    }
    /** Pakt de value van de energy type die gebruikt wordt als multiplier
     * @return int $multiplier
     */
    public function getweaknessValue()
    {
        return $this->multiplier;
    }
}
