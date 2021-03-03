<?php

class Resistance
{
    private $name;
    private $value;
    /** Constructor wordt uitgevoerd als er een nieuw object wordt aangemaakt
     * @param string $name
     * @param int $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    /** Pakt de naam van de energy type
     * @return string $name
     */
    public function getWeaknessType()
    {
        return $this->name;
    }
    /** Pakt de value van de resistance
     * @return int $value
     */
    public function getRecistanceValue()
    {
        return $this->value;
    }
}

