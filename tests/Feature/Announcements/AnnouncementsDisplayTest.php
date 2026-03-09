<?php

use App\Models\Announcements;

test('announcements are displayed on welcome page', function () {
    $announcement = Announcements::factory()->published()->create([
        'title' => 'Welcome Announcement',
        'description' => 'This is a test announcement',
        'image_url' => 'test.jpg',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee($announcement->title);
    $response->assertSee('Welcome Announcement');
});

test('announcements list page displays published announcements', function () {
    Announcements::factory(3)->published()->create();
    Announcements::factory()->create(['is_published' => false]);

    $response = $this->get('/announcements');

    $response->assertStatus(200);
    $response->assertSee('Announcements');
    $response->assertSee('Stay Informed');
});

test('unpublished announcements are not displayed on welcome page', function () {
    Announcements::factory()->create(['is_published' => false]);

    $response = $this->get('/');

    $response->assertStatus(200);
});

test('can view individual announcement', function () {
    $announcement = Announcements::factory()->published()->create([
        'title' => 'Important Notice',
        'description' => 'This is important content',
    ]);

    $response = $this->get("/announcements/{$announcement->id}");

    $response->assertStatus(200);
    $response->assertSee($announcement->title);
    $response->assertSee('Important Notice');
});

test('announcement show page displays related announcements', function () {
    $announcement = Announcements::factory()->published()->create();
    Announcements::factory(2)->published()->create();

    $response = $this->get("/announcements/{$announcement->id}");

    $response->assertStatus(200);
    $response->assertSee('More Announcements');
});
