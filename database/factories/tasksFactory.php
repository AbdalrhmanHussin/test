<?php

namespace Database\Factories;

use App\Models\company_group;
use App\Models\tasks;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

class tasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = tasks::class;

    public function definition()
    {
        return [
            'name' => 'default',
            'company_groups_id' => company_group::factory(),
            'start_date' => NOW(),
            'end_date'   => NOW(),
            'subjects'   => 'test'
        ];
    }
}
