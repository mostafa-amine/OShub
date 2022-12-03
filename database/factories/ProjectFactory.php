<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Project::class;
    public function definition()
    {
        return [
            'title' => fake()->text(20),
            'slug' => fake()->slug(),
            'short_description' => fake()->text(100),
            'project_url' => fake()->url(),
            'repo_url' => fake()->url(),
            'packagist_url' => fake()->url(),
            'description' => fake()->text(300),
            'user_id' => User::factory()->has(Project::factory()->count(3))
        ];
    }
}
