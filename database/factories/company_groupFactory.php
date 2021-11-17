<?php

namespace Database\Factories;

use App\Models\company_group;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class company_groupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = company_group::class;
    public function definition()
    {
        return [
            'company_name' => $this->faker->name,
        ];
    }
}
