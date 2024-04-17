<?php

namespace Database\Factories;

use App\Models\logo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\logo>
 */
class logoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = logo::class;
    public function definition()
    {
        
        $imageURL = $this->faker->imageUrl(100, 100);

        return [
            'slide_url' => $imageURL,
            'url'=> $this->faker->url(),
        ];
    }
}
