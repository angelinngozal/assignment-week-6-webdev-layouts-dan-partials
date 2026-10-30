<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Gallery of my artworks');
        $response->assertSee('Main navigation');
    }

    public function test_about_page_renders_its_content(): void
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertSee('Drawing has been a part of my life');
    }

    public function test_blog_page_renders_its_content(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee('How to draw realistic eyebrows');
    }

    public function test_contact_page_renders_its_content(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('here are some ways to reach me.');
    }
}
