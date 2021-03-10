<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostViewControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test showList */
    function ToDo一覧画面を開ける() {

        $post1 = Post::factory()->create();
        $post2 = Post::factory()->create();
        $post3 = Post::factory()->create();

        $response = $this->get('/');

        $response->assertViewIs('post.list');
        $response->assertOk();
        $response->assertSee($post1->content);
        $response->assertSee($post2->content);
        $response->assertSee($post3->content);
    }

}