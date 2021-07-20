<?php

namespace Database\Factories;

use App\Models\Monster;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonsterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Monster::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text($maxNbChars = 200),
            'type' => $this->faker->randomElement(array('tarentula', 'cyclope', 'Vampire', 'critters')),
            'height' => $this->faker->numberBetween(100, 200),
            'isDead' => $this->faker->isDead = 1,
            'diet' => $this->faker->randomElement(array('veggie', 'canibalisme', 'carnivore', 'omnivore')),
            'health' => $this->faker->numberBetween(80, 100),
            'attack' => $this->faker->numberBetween(20, 40),
            'defense' => $this->faker->numberBetween(10, 25),
            'speed' => $this->faker->numberBetween(1, 3),
            'faction' => $this->faker->randomElement(array('bleu', 'jaune', 'rouge')),
            'user_id' => $this->faker->numberBetween(1, 2),
            'fight_id' => $this->faker->fight_id = null
        ];
    }
}
