<?php

namespace Database\Factories;

use App\Models\Asignatura;
use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignaturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignatura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $profesor=Profesor::all('id');//Traemos las id de los profesores
        return [
            'nombre'=>$this->faker->word(),
            'descripcion'=>$this->faker->realText(180),
            //Genera un numero entre 0 y 9 pero le digo explicitamente que no sea
            //0 es decir  1, 2, 3, 4, 5, 6, 7, 8, o 9
            'creditos'=>$this->faker->randomDigitNot(0),
            'profesor_id'=>$profesor->get(rand(0,count($profesor)-1))
        ];
    }
}
