<?php
declare(strict_types=1);

class SuperHero
{
    // promoted properties dentro del constructor
    public function __construct(
        private string $name,
        private array $powers,
        public $planet
    ) {
    }

    public function attack()
    {
        return "$this->name ataca con sus poderes";
    }

    public function show_all()
    {
        return get_object_vars($this);
    }

    public function description()
    {
        $powers = implode(",", $this->powers);
        return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }

    public static function random()
    {
        $names = ["Thor", "Spider-man", "Wolverine", "Iron-man", "Hulk"];
        $powers = [
            ["Super-fuerza", "Volar", "Rayos-laser"],
            ["Telarañas", "Super agilidad", "Sentido arácnido"],
            ["Super-fuerza", "Regeneración", "Garras de acero"],
            ["Super inteligencia", "Super traje mecánico", "Volar"],
            ["Cambio de tamaño", "Super fuerza", "Super agilidad"]
        ];
        $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

        $name = $names[array_rand($names)]; // Selecciona una Key random de un array
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

// instancia
$hero = new SuperHero("Superman", ["Super fuerza", "Rayos laser rojos", "Volar"], "Krypton"); // método publico

// para acceder a los métodos STATIC se utilizan ::nombre del método()
$hero = SuperHero::random(); // método estático
echo $hero->description();
