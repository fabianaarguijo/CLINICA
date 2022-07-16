<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\medico;


class medicoFactory extends Factory

{ 
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = medico::class;
  

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreMedico'=> $this->faker->firstname,
            'primerApellido'=> $this->faker->lastname,
            'segundoApellido'=> $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=> $this->faker->phoneNumber
            //
        ];
    }
}
