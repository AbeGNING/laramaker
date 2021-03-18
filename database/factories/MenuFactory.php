<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->uuid,
            'titre' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'ingredients' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'image' =>  'menus/'.$this->faker->file($sourceDir = 'C:\Mets', $targetDir = 'C:\laragon\www\laramaker\storage\app\public\menus', false),
            'prix' => $this->faker->numberBetween($min = 1000, $max = 9000),
        ];
    }
}
