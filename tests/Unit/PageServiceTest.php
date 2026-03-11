<?php

namespace Tests\Unit;

use App\Models\admin\Module\Page;
use App\Services\PageService;
use App\Repositories\PageRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageServiceTest extends TestCase
{
    use RefreshDatabase;

    private PageService $pageService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pageService = $this->app->make(PageService::class);
    }

    /** @test */
    public function it_can_create_a_page()
    {
        $data = [
            'title' => 'Terms and Conditions',
            'slug' => 'terms-and-conditions',
            'content' => 'Terms content here',
            'is_published' => true,
        ];

        $page = $this->pageService->save($data);

        $this->assertInstanceOf(Page::class, $page);
        $this->assertEquals('Terms and Conditions', $page->title);
        $this->assertTrue($page->is_published);
    }

    /** @test */
    public function it_can_update_a_page()
    {
        $page = Page::factory()->create();

        $data = [
            'title' => 'Updated Title',
            'slug' => $page->slug,
            'content' => 'Updated content',
            'is_published' => false,
        ];

        $updated = $this->pageService->save($data, $page->id);

        $this->assertEquals('Updated Title', $updated->title);
        $this->assertFalse($updated->is_published);
    }

    /** @test */
    public function it_can_get_published_pages()
    {
        Page::factory()->count(3)->create(['is_published' => true]);
        Page::factory()->count(2)->create(['is_published' => false]);

        $published = $this->pageService->getPublished();

        $this->assertEquals(3, $published->count());
    }

    /** @test */
    public function it_can_delete_a_page()
    {
        $page = Page::factory()->create();

        $this->pageService->delete($page->id);

        $this->assertSoftDeleted('pages', ['id' => $page->id]);
    }

    /** @test */
    public function it_can_restore_a_deleted_page()
    {
        $page = Page::factory()->create();
        $this->pageService->delete($page->id);

        $this->pageService->restore($page->id);

        $this->assertDatabaseHas('pages', ['id' => $page->id, 'deleted_at' => null]);
    }
}
