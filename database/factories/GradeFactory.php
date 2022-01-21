<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person' => $this->faker->name(),
            'subject'=>$this->faker->randomElement(['Matematika', 'Angol nyelv', 'Magyar nyelv', 'Irodalom', 'Történelem','Kémia','Fizika','Biológia','Természet']),
            'type'=>$this->faker->randomElement(['röpdolgozat', 'témazáró','beadandó']),
            'grade' => $this->faker->numberBetween(1,5)
        ];
    }
}
