<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\domaine;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domaine>
 */
class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Domaine::class;
    public function definition(): array
    {
        return [
            'domaine_activity'=>fake()->activity,
        ];
    }
}
