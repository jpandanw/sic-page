<?php

use App\Models\Events;

test('events list page loads successfully', function () {
    $response = $this->get('/events');

    $response->assertStatus(200);
    $response->assertSee('Events');
    $response->assertSee('Upcoming Events');
});

test('published events are displayed on the events list page', function () {
    $event = Events::factory()->create([
        'title' => 'Annual College Festival',
        'is_published' => true,
    ]);

    $response = $this->get('/events');

    $response->assertStatus(200);
    $response->assertSee($event->title);
});

test('unpublished events are not displayed on the events list page', function () {
    $event = Events::factory()->create([
        'title' => 'Secret Unpublished Event',
        'is_published' => false,
    ]);

    $response = $this->get('/events');

    $response->assertStatus(200);
    $response->assertDontSee($event->title);
});

test('events list page shows empty state when no published events exist', function () {
    Events::factory(3)->create(['is_published' => false]);

    $response = $this->get('/events');

    $response->assertStatus(200);
    $response->assertSee('No Events Scheduled');
});

test('events list page shows multiple published events', function () {
    $events = Events::factory(3)->create(['is_published' => true]);

    $response = $this->get('/events');

    $response->assertStatus(200);
    foreach ($events as $event) {
        $response->assertSee($event->title);
    }
});

test('events list page includes pagination', function () {
    Events::factory(15)->create(['is_published' => true]);

    $response = $this->get('/events');

    $response->assertStatus(200);
    $response->assertSee('Next');
});
