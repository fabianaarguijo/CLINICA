<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tratamiento;


class tratamientoFactory extends Factory

{ 
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tratamiento::class;
  

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_Tratamiento'=> $this->faker->name,
            'cantidad_dosis'=> $this->faker->numberBetween(1,30),
            'Precio'=> $this->faker->randomFloat(2,10,30000),


            //
        ];
    }
}
