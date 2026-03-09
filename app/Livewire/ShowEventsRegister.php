<?php

namespace App\Livewire;

use App\Models\Events;
use Livewire\Component;

class ShowEventsRegister extends Component
{
    public ?int $selectedEventId = null;

    public function selectEvent(int $eventId): void
    {
        $this->selectedEventId = $eventId;
    }

    public function closeEvent(): void
    {
        $this->selectedEventId = null;
    }

    public function render()
    {
        $events = Events::where('is_published', true)
            ->orderBy('start_date', 'asc')
            ->limit(3)
            ->get();

        $selectedEvent = $this->selectedEventId
            ? Events::find($this->selectedEventId)
            : null;

        return view('livewire.show-events-register', [
            'events' => $events,
            'selectedEvent' => $selectedEvent,
        ]);
    }
}
