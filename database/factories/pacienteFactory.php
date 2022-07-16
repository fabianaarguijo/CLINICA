<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\paciente;


class pacienteFactory extends Factory

{ 
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = paciente::class;
  

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombrePaciente'=> $this->faker->firstname,
            'primerApellido'=> $this->faker->lastname,
            'segundoApellido'=> $this->faker->lastname,
            'email' => $this->faker->unique()->safeEmail(),
            'telefono'=> $this->faker->phoneNumber,
            'direccion'=> $this->faker->address, 
            'ciudad'=>$this->faker->city

            //
        ];
    }
}
