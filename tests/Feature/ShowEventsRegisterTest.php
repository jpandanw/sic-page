<?php

namespace Tests\Feature;

use App\Livewire\ShowEventsRegister;
use App\Models\Events;
use Livewire\Livewire;

test('show events register component renders events', function () {
    $event = Events::factory()->create([
        'is_published' => true,
    ]);

    Livewire::test(ShowEventsRegister::class)
        ->assertSee($event->title)
        ->assertSee($event->location);
});

test('show events register component can select event', function () {
    $event = Events::factory()->create([
        'is_published' => true,
    ]);

    Livewire::test(ShowEventsRegister::class)
        ->call('selectEvent', $event->id)
        ->assertSet('selectedEventId', $event->id)
        ->assertSee($event->title);
});

test('show events register component can close event', function () {
    $event = Events::factory()->create([
        'is_published' => true,
    ]);

    Livewire::test(ShowEventsRegister::class)
        ->call('selectEvent', $event->id)
        ->call('closeEvent')
        ->assertSet('selectedEventId', null);
});
