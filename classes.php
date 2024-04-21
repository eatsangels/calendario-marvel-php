<?php

class SuperHero {

    // promete property and methods
    public function __construct(
        public $name, 
        public $power, 
        public $planet
        ) {

    }

    public function attack () {
        return " ¡$this->name ataca con su con sus poderes!";
    }

    public function description () {
        return "$this->name es un superheroe que viene de $this->planet y su poder es $this->power";
    }
    

}

$hero = new SuperHero("Superman","Super fuerza", "Krypton", "Rayos X" );
echo $hero->description();