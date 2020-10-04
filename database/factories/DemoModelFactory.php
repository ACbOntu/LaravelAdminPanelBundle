<?php

namespace Database\Factories;

use App\Models\DemoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemoModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DemoModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'mobile' => $this->faker->phoneNumber,
        ];
    }
}
