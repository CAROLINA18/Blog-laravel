<?php

namespace Database\Factories;

use App\Models\Entrada;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entrada::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'titulo' => "blog {$this->faker->word}",
            'descripcion' => $this->faker->text(),
            'autor' => $this->faker->text(),
            'thumbnail' => "https://cdn.pixabay.com/photo/2015/03/26/09/39/cupcakes-690040_960_720.jpg",           
        ];

    }
}
