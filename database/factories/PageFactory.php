<?php

namespace Database\Factories;

use App\Models\admin\Module\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition(): array
    {
        $title = $this->faker->sentence();
        $slug = \Illuminate\Support\Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraphs(5, true),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->sentence(15),
            'meta_keywords' => $this->faker->words(5, true),
            'is_published' => $this->faker->boolean(70),
            'ip_address' => $this->faker->ipv4(),
        ];
    }
}
