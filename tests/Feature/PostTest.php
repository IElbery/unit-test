<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function post_can_be_created(): void
    {
        $postData = [
            'title' => 'Test Post',
            'content' => 'This is a test post.'
        ];

        $post = Post::create($postData);

        $this->assertDatabaseHas('posts', $postData);
    }
}
