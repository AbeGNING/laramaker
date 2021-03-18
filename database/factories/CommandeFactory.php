<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->uuid,
            'user_id' => User::all()->random()->id,
            'menu_id' => Menu::all()->random()->id,
        ];
    }
}
