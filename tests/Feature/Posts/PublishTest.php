<?php

namespace Tests\Feature\Posts;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Faker\Provider\Lorem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Routing\Route;use Tests\TestCase;

class PublishTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_post_can_be_rendered()
    {
        $response = $this->get('/post/create');
        $response->assertStatus(200);
    }

    public function test_post_can_be_publish() {

        $user = User::factory()->create();


        $response = $this->post('/post/create', [
            'title' => 'Un article de blog',
            'content' => Lorem::paragraph(),
            'cover_name' => null,
            'is_highlighted' => false,
            'category_id' => 1,
            'author_id' => $user->get('id'),
        ]);

        $response->assertRedirect(RouteServiceProvider::ADMIN_VIEW_POSTS_BLOG);
    }
}
