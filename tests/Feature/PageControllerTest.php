<?php

namespace Tests\Feature;

use App\Models\admin\Module\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_pages_list()
    {
        Page::factory()->count(5)->create();

        $response = $this->get(route('admin.pages.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.module.page.index');
    }

    /** @test */
    public function it_can_create_a_page()
    {
        $data = [
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => 'This is about us page content',
            'meta_title' => 'About Us',
            'meta_description' => 'About our company',
            'is_published' => true,
        ];

        $response = $this->post(route('admin.pages.store'), $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('pages', ['slug' => 'about-us']);
    }

    /** @test */
    public function it_can_update_a_page()
    {
        $page = Page::factory()->create();

        $data = [
            'title' => 'Updated Title',
            'slug' => $page->slug,
            'content' => 'Updated content',
        ];

        $response = $this->put(route('admin.pages.update', $page), $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('pages', ['id' => $page->id, 'title' => 'Updated Title']);
    }

    /** @test */
    public function it_can_delete_a_page()
    {
        $page = Page::factory()->create();

        $response = $this->delete(route('admin.pages.destroy', $page));

        $response->assertStatus(200);
        $this->assertSoftDeleted('pages', ['id' => $page->id]);
    }

    /** @test */
    public function it_can_restore_a_deleted_page()
    {
        $page = Page::factory()->create();
        $page->delete();

        $response = $this->post(route('admin.pages.restore', $page->id));

        $response->assertStatus(200);
        $this->assertDatabaseHas('pages', ['id' => $page->id, 'deleted_at' => null]);
    }
}
