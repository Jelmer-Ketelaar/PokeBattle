# Object Oriented Programming (OOP)
# Casus / inhoud van de opdracht
In deze opdracht ga je Pokemon classes modelleren.

Maak voor elke class die je aanmaakt een eigen bestand aan.

Als je de opdracht in PHP gaat schrijven, maak dan tevens een index.php waarin je de werking van de objecten gaat demonstreren aan de hand van de functionele beschrijving. Gebruik de 'LAB - OOP - Superheroes' als voorbeeld.

Let op: je mag alleen plain code gebruiken in je uitwerking! Dus geen externe libraries of frameworks.


### Functionele beschrijving:
* Pokemon
* Heeft een naam
* Heeft een EnergyType
* Heeft hitpoints (maximum health)
* Heeft health die bij de geboorte gelijk is aan de waarde van de hitpoints
* Heeft 1 of meerdere Attacks
* Heeft een Weakness
* Heeft een Resistance
* Kan een andere Pokemon aanvallen met een Attack
    * De schade van een Attack wordt vermenigvuldigd met de multiplier van de Weakness indien de EnergyType van de Weakness gelijk is aan de EnergyType van de aanvallende Pokemon
    * De schade van een Attack wordt verminderd met de waarde van de Resistance indien de EnergyType van de Resistance gelijk is aan de EnergyType van de aanvallende Pokemon
* Kan schade krijgen van een andere Pokemon als resultaat van een Attack
    * De totale schade van een Attack wordt verminderd op de health van de Pokemon die wordt aangevallen
* EnergyType
    * Heeft een naam/type  
* Attack
    * Heeft een naam
    * doet schade (in hitpoints)
* Weakness
    * Heeft een EnergyType
    * Heeft een multiplier (vermenigvuldiger)
* Resistace
    * Heeft een EnergyType
    * Heeft een waarde
* Pikachu is een Pokemon
    * Heeft een zelf te verzinnen naam
    * Is van het Energytype "Lightning"
    * Heeft 60 hitpoints
    * Heeft 2 attacks
        * Electric Ring doet 50 schade
        * Pika Punch doet 20 schade
    * Heeft een weakness
        * EnergyType "Fire" met een multiplier van 1,5
    
    
    
