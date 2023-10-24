<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;


class ClienteFactory extends Factory
{

    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name(),
            'apellido'=> $this->faker->lastName(),
            'genero'=> $this->faker->randomElement(['M', 'F']),
            'fecha_nacimiento'=> $this->faker->date(),
            'telefono'=> $this->faker->phoneNumber(),
            'correo'=> $this->faker->safeEmail(),
            'direccion'=> $this->faker->streetAddress(),
            'ciudad'=> $this->faker->city(),
            'pais'=> $this->faker->country(),
        ];
    }
}
