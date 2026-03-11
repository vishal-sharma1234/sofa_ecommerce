<?php

namespace Database\Seeders;

use App\Models\admin\Module\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'content' => 'Write your about us page content here...',
                'meta_title' => 'About Us - Our Story',
                'meta_description' => 'Learn more about our company and mission',
                'meta_keywords' => 'about, company, story',
                'is_published' => true,
            ],
            [
                'title' => 'Terms and Conditions',
                'slug' => 'terms-and-conditions',
                'content' => 'Write your terms and conditions here...',
                'meta_title' => 'Terms and Conditions',
                'meta_description' => 'Read our terms and conditions',
                'meta_keywords' => 'terms, conditions',
                'is_published' => true,
            ],
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'content' => 'Write your privacy policy here...',
                'meta_title' => 'Privacy Policy',
                'meta_description' => 'Read our privacy policy',
                'meta_keywords' => 'privacy, policy',
                'is_published' => true,
            ],
        ];

        foreach ($pages as $page) {
            Page::firstOrCreate(
                ['slug' => $page['slug']],
                $page
            );
        }
    }
}
