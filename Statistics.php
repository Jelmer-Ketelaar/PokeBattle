<?php

class statistics
{
    /**
     * @var int
     */
    private static $pokemon = 0;

    public static function addPokemon()
    {
        self::$pokemon++;
    }

    public static function deletePokemon()
    {
        self::$pokemon--;
    }
}