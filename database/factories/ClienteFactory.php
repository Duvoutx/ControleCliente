<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' =>$this->faker->name($maxNbChars = 9),
            'telefone'=>$this->faker->numberBetween(100000000, 999999999),
        ];
       
    }
}

