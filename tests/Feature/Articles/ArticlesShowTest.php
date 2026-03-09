<?php

use App\Models\Articles;

test('articles show page loads successfully', function () {
    $article = Articles::factory()->published()->create([
        'title' => 'Test Article Title',
        'content' => '<p>Test article content here.</p>',
    ]);

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(200);
    $response->assertSee($article->title);
    $response->assertSee('Test article content here.');
});

test('articles show page displays breadcrumbs', function () {
    $article = Articles::factory()->published()->create();

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(200);
    $response->assertSee('Articles');
    $response->assertSee('Home');
});

test('articles show page displays published date', function () {
    $article = Articles::factory()->published()->create();

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(200);
    $response->assertSee($article->created_at->format('F d, Y'));
});

test('articles show page returns 404 for missing article', function () {
    $response = $this->get('/articles/99999');

    $response->assertStatus(404);
});

test('articles show page returns 404 for unpublished article', function () {
    $article = Articles::factory()->create(['is_published' => false]);

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(404);
});

test('articles show page displays more articles section', function () {
    $article = Articles::factory()->published()->create();
    Articles::factory(2)->published()->create();

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(200);
    $response->assertSee('More Articles');
});

test('articles show page does not include current article in more articles', function () {
    $article = Articles::factory()->published()->create(['title' => 'Current Article Unique XYZ']);
    $other = Articles::factory()->published()->create(['title' => 'Other Article AAA']);

    $response = $this->get("/articles/{$article->id}");

    $response->assertStatus(200);
    $response->assertSee('Other Article AAA');
    // The current article's link should not appear in the "More Articles" grid
    $this->assertStringNotContainsString("/articles/{$article->id}\"", $response->getContent());
});

test('articles list page only shows published articles', function () {
    $published = Articles::factory()->published()->create(['title' => 'Published Article']);
    Articles::factory()->create(['is_published' => false, 'title' => 'Hidden Article']);

    $response = $this->get('/articles');

    $response->assertStatus(200);
    $response->assertSee('Published Article');
    $response->assertDontSee('Hidden Article');
});
